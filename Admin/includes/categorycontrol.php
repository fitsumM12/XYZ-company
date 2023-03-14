<?php 
include_once "db.inc.php";

class Category{
    public function deleteCategory(){
        global $conn;
        if(isset($_GET['deleteCategory'])){
            foreach($_POST['selectedCategory'] as $cat_id)
        {
            $query = "DELETE FROM `categories` WHERE `cat_id`='$cat_id'";
            $conn->query($query);
        }
        }
    }
    public function addCategory(){
        GLOBAL $conn;
        if(isset($_POST['addCategory'])){
            $categorTitle = $conn->real_escape_string($_POST['categoryTitle']);
            $categoryDescription = $conn->real_escape_string($_POST['categoryDescription']);
            $categoryAuthor = $conn->real_escape_string($_POST['categoryAuthor']);
            try{
               $query = "INSERT INTO `categories`(`cat_title`, `cat_description`, `cat_author`) VALUES ('$categorTitle','$categoryDescription','$categoryAuthor')";
               if($conn->query($query)){
                    Header("Location: category_view");
               }
               else{
                   throw new Exception("query is incorrect");
               }
            }
            catch(Exception $e){
                $e=$e->getMessage();
                Header("Location: error_message?message=$e");
            }
        }
    }
    public function updateCategory(){
    
        GLOBAL $conn;
        if(isset($_POST['updateCategory'])){
            $cat_id = $_POST['updateCategory'];
            $CategoryTitle = $conn->real_escape_string($_POST['categoryTitle']);
            $CategoryDescription = $conn->real_escape_string($_POST['categoryDescription']);
            $CategoryAuthor = $conn->real_escape_string($_POST['categoryAuthor']);
            try{
                if(empty($CategoryAuthor)){
                
                throw new Exception("Select Status Or Select Author is Incorrect ");
            }
            else{
                $sql = "UPDATE `categories` SET `cat_title`='$CategoryTitle',`cat_description`='$CategoryDescription',`cat_author`='$CategoryAuthor' WHERE `cat_id`='$cat_id'";
            
                if($conn->query($sql)){
                    
                    $conn->query($query);
                    echo "<script>alert('update')</script>";
                    Header("Location: Category_view"); 
                }else{ 
                    throw new Exception("Incorrect syntax");
                }
            }
            
            }catch(Exceptionn $e){
                $e=$e->getMessage();
                Header("Location: error_message?message=$e");  
            }
            
        }
    }
    public function viewCategory(){
        GLOBAL $conn;
        $sql ="SELECT `cat_id`, `cat_title`, `cat_description`, `cat_author`, `cat_status` FROM `categories` WHERE 1";
        try{
            $result = $conn->query($sql);
            while($rows = $result->fetch_assoc()){
                $cat_author = $rows['cat_author'];
                $sql2 = "SELECT `tm_name` FROM `team_members` WHERE `tm_id`='$cat_author'";
                $result2 = $conn->query($sql2);
                $rows2 = $result2->fetch_assoc();
            echo"
            <tr>
                <td><input type='checkbox' id='selectedCategory' name='selectedCategory[]' value=".$rows['cat_id']."> </input></td>
                <td>".$rows['cat_title']."</td>
                <td>".$rows2['tm_name']."</td>
                <td><label class='badge'>".$rows['cat_status']."</label></td>
                <td><label class='badge badge-success'><a href='category_edit?EditCategory=".$rows['cat_id']."' style='text-decoration:none;'>EDIT</a></label></td>
            </tr>
                
            ";
            }
        }catch(Exception $e){
            
            $e=$e->getMessage();
            Header("Location: error_message?message=$e");
        }
    }
    public function editCategory(){
        GLOBAL $conn;
        try{
            if(isset($_GET['EditCategory'])){
                $cat_id = $_GET['EditCategory'];
                $query = "SELECT  * FROM `categories` WHERE `cat_id`='$cat_id'";  
                $result =NULL;
                
                if($conn->query($query)){
                    $result  = $conn->query($query);
                    return $rows = $result->fetch_assoc();
                }   
                else{
                    throw new Exception("Erron in Syntax");
    
                }
            } 
        }catch(Exception $e)
        {
            $e=$e->getMessage();
            Header("Location: error_message?message=$e");        
        }
    }
    public function unapproveCategory()
     {
        global $conn;
        if(isset($_GET['unapproveCategory'])){
            foreach($_POST['selectedCategory'] as $cat_id)
        {
            $query = "UPDATE `categories` SET `cat_status`='unapproved' WHERE `cat_id`='$cat_id'";
            $conn->query($query);
        }
        }
        
    }
    public function approveCategory()
     {
        global $conn;
        if(isset($_GET['approveCategory'])){
            foreach($_POST['selectedCategory'] as $cat_id)
        {
            $query = "UPDATE `categories` SET `cat_status`='approved' WHERE `cat_id`='$cat_id'";
            $conn->query($query);
        }
        }
        
    }


}
$category = new Category();
$category->deleteCategory();
$category->addCategory();
$category->updateCategory();
$category->unapproveCategory();
$category->approveCategory();

?>