<?php 
include_once "db.inc.php";

class Team{
    public function viewMember(){
        GLOBAL $conn;
        $sql ="SELECT `tm_id`, `tm_name`, `tm_email`, `tm_password`, `tm_contact`, `tm_role`, `tm_status`, `tm_photo`, `tm_description`, `tm_profession` FROM `team_members` WHERE 1";
        try{
            $result = $conn->query($sql);
            while($rows = $result->fetch_assoc()){
            echo"
            <tr>
            <td>
            <input type='checkbox' id='selectedMember' name='selectedMember[]' value=".$rows['tm_id']."></input></td>
            <td>".$rows['tm_name']."</td>
            <td>".$rows['tm_email']."</td>
            <td>".$rows['tm_role']."</td>
            <td>".$rows['tm_status']."</td>
            <td><a href='team_preview?tm_id=".$rows['tm_id']."'>view</a></td>
        </tr>
                
            ";
            }
        }catch(Exception $e){
            
            $e=$e->getMessage();
            Header("Location: error_message?message=$e");
        }
    }
    public function fetchTeamMember(){
        global $conn;
        if(isset($_GET['tm_id'])){
            $tm_id = $_GET['tm_id'];
            $sql = "SELECT `tm_id`, `tm_name`, `tm_email`, `tm_password`, `tm_contact`, `tm_role`, `tm_status`, `tm_photo`, `tm_description`, `tm_profession` FROM `team_members` WHERE `tm_id`='$tm_id'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            echo '<div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <address>
                            <img src="../Home/images/team/'.$row['tm_photo'].'" style="border-radius:15px" alt="" width="auto"
                                height="200px" srcset="">
                            <br>
                            <p class="font-weight-bold">ID: </p>
                            <p>'.$row['tm_id'].'</p>
                            <p class="font-weight-bold">Name: </p>
                            <p>'.$row['tm_name'].'</p>
                            <p class="font-weight-bold">Status:</p>
                            <p> '.$row['tm_status'].'</p>
                        </address>
                    </div>
                    <div class="col-md-6">
                    ';
                    if($_SESSION['tm_role']=="admin"){
                        echo ' <div class="dropdown">
    
    
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"> UPDATE ITS ROLE</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <a class="dropdown-item" href="team_role?admin='.$tm_id.'">Admin</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="team_role?author='.$tm_id.'">Author</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="team_role?pending='.$tm_id.'">Pending</a>
                            <div class="dropdown-divider"></div>
                
                
                
                        </div>
                    </div>';
                    }
                   
                       echo ' <address class="text-primary">
                            <p class="font-weight-bold"> Email: </p>
                            <p class="mb-2"> '.$row['tm_email'].'</p>
                            <p class="font-weight-bold"> Role:</p>
                            <p class="mb-2">'.$row['tm_role'].'</p>
        
                        </address>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Description</h4>
        
                    <p class="lead">'.$row['tm_description'].'</p>
                </div>
            </div>         
            ';
        }
    }
    public function addmember(){
        global $conn;
        if(isset($_POST['addMember'])){
            try{
                $memberName =$conn->real_escape_string($_POST['memberName']);
                $memberEmail = $conn->real_escape_string($_POST['memberEmail']);
                $memberPassword =$conn->real_escape_string($_POST['memberPassword']);
                $memberPassword =  password_hash($memberPassword,PASSWORD_BCRYPT,['cost'=>12]);
                $query = "INSERT INTO `team_members`(`tm_name`, `tm_email`, `tm_password`) VALUES ('$memberName','$memberEmail','$memberPassword')";
                
                if($conn->query($query)){
                    $query2 = "SELECT `tm_id` from `team_members` where `tm_email`='$memberEmail'";
                    $res = $conn->query($query2);
                    $row = $res->fetch_assoc();
                    $tm_id = $row['tm_id'];
                    $query3 = "INSERT INTO `team_member_address`(`tm_id`) VALUES ('$tm_id')";
                    if($conn->query($query3)){
                    
                        Header("Location: team_view");
                    }
                    else{
                    throw new Exception("Incorrect Syntax query3");
                        
                    }
                    
                }else{
                }
            }
            catch(Exception $e){
                $e = $e->getMessage();
                Header("Location: error_message?message=$e");
            }
        }
    }
    public function deleteMember()
     {
        global $conn;
        if(isset($_GET['deleteMember'])){
            foreach($_POST['selectedMember'] as $tm_id)
            {
                $query = "DELETE FROM `team_members` WHERE `tm_id`='$tm_id'";
                $conn->query($query);
            }
        }
        
    }
    public function unapproveMember()
     {
        global $conn;
        if(isset($_GET['unapproveMember'])){
            foreach($_POST['selectedMember'] as $tm_id)
            {
                $query = "UPDATE `team_members` SET `tm_status`='unapproved' WHERE `tm_id`='$tm_id'";
                $conn->query($query);
            }
        }
        
    }
    public function approveMember()
     {
        global $conn;
        if(isset($_GET['approveMember'])){
            foreach($_POST['selectedMember'] as $tm_id)
            {
                $query = "UPDATE `team_members` SET `tm_status`='approved' WHERE `tm_id`='$tm_id'";
                $conn->query($query);
            }
        }
        
    }
}
$team = new Team();
$team->addmember();
$team->approveMember();
$team->unapproveMember();
$team->deleteMember();

?>