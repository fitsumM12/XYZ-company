<?php

class Company{
    public function fetchCompany(){
        global $conn;
            $sql = "SELECT `id`, `logo`, `description`, `design`, `support` FROM `company` WHERE 1";
            try{
                
            
            if($result = $conn->query($sql)){
               
            if($row = $result->fetch_assoc()){
                echo '
            <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <address>
                        logo:
                        <img src="../Home/images/logo/'.$row['logo'].'"  style="border-radius:15px" alt="" width="auto" height="200px" srcset="">
                        <br>
                           
                        </address>
                    </div>
                    <div class="col-md-4">
                    <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Setting </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <a class="dropdown-item" href="company_logo_setting?Edit='.$row['id'].'">Update Image</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="company_edit?Edit='.$row['id'].'">Update Content</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="company_address?Edit='.$row['id'].'">Update Social address</a>
                    </div>
                      
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title">Description:</h4>
                </p>
                <p class="lead">'.$row['description'].'</p>
            </div>
            <div class="card-body">
            <h4 class="card-title">Design:</h4>
            </p>
            <p class="lead">'.$row['design'].'</p>
        </div>
                <div class="card-body">
                <h4 class="card-title">Support:</h4>
                </p>
                <p class="lead">'.$row['support'].'</p>
            </div>
                </div>
                    
            ';    
            }
            else{
                
                throw new Exception("fetch error");
            }
         
            }
            else{
                throw new Exception("Syntax error");
            }
            }
            catch(Exception $e){
                $e = $e->getMessage();
                header("Location: error_message? message=$e");
            }
        
      
    }   
    public function editCompany(){
        GLOBAL $conn;
        try{
            if(isset($_GET['Edit'])){
                $id = $_GET['Edit'];
                $query = "SELECT * FROM `company` WHERE `id`='$id' limit 1";  
                $result =NULL;
                
                if(!$conn->query($query)){
                    throw new Exception("Erron in Syntax");
                }
                else{
                    $result  = $conn->query($query);
                    return $rows = $result->fetch_assoc();
                }   
            } 
        }catch(Exception $e)
        {
            $e=$e->getMessage();
            Header("Location: error_message?message=$e");        
        }
    }
    public function updateCompanyDecription(){
        global $conn;
        if(isset($_POST['updateCompanyDecription'])){
        $companyDescription = $_POST['companyDescription'];
        $companySupport = $_POST['companySupport'];
        $companyDesign = $_POST['companyDesign'];
            $sql = "UPDATE `company` SET `description`= '$companyDescription',`design`='$companyDesign',`support`='$companySupport' WHERE 1";
            try{
                if($conn->query($sql)){
                    Header('Location: company');
                }
                else{
                    throw new Exception("Syntax Error");
                }
            }catch(Exception $e)
            {
                $e=$e->getMessage();
                Header("Location: error_message?message=$e");        
            }
        }
    }
    public function updateCompanySocialMedia(){
        global $conn;
        if(isset($_POST['updateCompanySocialMedia'])){
            $id = $_POST['updateCompanySocialMedia'];
            $place = $_POST['place'];
            $facebook = $_POST['facebook'];
            $twitter = $_POST['twitter'];
            $instagram = $_POST['instagram'];
            $linkedin = $_POST['linkedin'];
            $email = $_POST['email'];
            $contact1 = $_POST['contact1'];
            $contact2 = $_POST['contact2'];
            $sql = "UPDATE `company` SET `contact2`='$contact2',`contact`='$contact1',`place`='$place',`facebook`='$facebook',`linkedin`='$linkedin',`twitter`='$twitter',`instagram`='$instagram' WHERE `id`='$id'";
            try{
                if($conn->query($sql)){
                    Header('Location: company');
                }
                else{
                    throw new Exception("Syntax Error");
                }
            }catch(Exception $e)
            {
                $e=$e->getMessage();
                Header("Location: error_message?message=$e");        
            }
        }
    }
    public function updateCompanyLogo(){
        GLOBAL $conn;
        
            if(isset($_POST['updateCompanyLogo'])){
                $id = $_POST['updateCompanyLogo'];
                
            // handling the file or the image
            $img=$_FILES['img']['name'];
            $img_type=$_FILES['img']['type'];
            $img_tmp_name=$_FILES['img']['tmp_name'];
            $img_size=$_FILES['img']['size'];
        
            try{
                if($img_type=="image/jpeg" || $img_type=="image/jpg" || $img_type=="image/png" || $img_type=="image/gif"){
                    if($img_size<=50000000){
                        $pic_name=time()."_".$img;
                        move_uploaded_file($img_tmp_name,"../Home/images/logo/".$pic_name);
                        $query = "UPDATE `company` SET `logo`='$pic_name' WHERE `id`='$id'";
                    
                        if($conn->query($query)){
                            
                            Header("Location: company");
                        }
                        else{
                            throw new Exception("Query error".$conn->error);
                        }
                    }
                    else{
                        throw new Exception("The image size should be less than 50Mb");
                    }
                }
                else{
                throw new Exception("Image type should be JPEG, JPG ,PNG ,GIF.<br> TRY AGAIN");
                }
            }
        catch(Exception $e){
            $e=$e->getMessage();
            Header("Location: error_message? message=$e");
        }
        }
    }
    
    
    
}

$company = new Company();
$company->updateCompanyDecription();
$company->updateCompanySocialMedia();
$company->updateCompanyLogo();


?>