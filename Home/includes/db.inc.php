<!-- making a tie with database or backend -->

<?php
class Connection extends Exception{
    private $servername = "localhost";
    private $username ="root";
    private $password ="";
    private $dbname = "xyz-company";
    public function connect(){
        //while connecting with database the error may occur so  handle it with try and catch concept
        try{
            if(!mysqli_connect($this->servername,$this->username,$this->password,$this->dbname)){
                throw new Exception("Connection Failed!. TRY AFTER A MINUTE");
            }
            else if($con = new mysqli($this->servername,$this->username,$this->password,$this->dbname)){
                return $con;
            }
            else{
                echo "something unknown occured";
            }
        }
        catch(Exception $e){
            $e = $e->getMessage();
            Header("Location:  error_message.php?message=$e");
        }
    }
}
// creation of an object to connect with database
$obj = new Connection();
$conn = $obj->connect();
?>