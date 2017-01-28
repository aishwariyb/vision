<?php
class FbUser {
    private $dbHost     = "localhost";
    private $dbUsername = "rootvision";
    private $dbPassword = "rootvision";
    private $dbName     = "visiondatabase";
    private $fuserTbl    = 'f_users';
    
    function __construct(){
        if(!isset($this->db)){
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }
    
    function checkUser($fbuserData = array()){
        if(!empty($fbuserData)){
            //Check whether user data already exists in database
            $prevQuery = "SELECT * FROM ".$this->fuserTbl." WHERE oauth_provider = '".$fbuserData['oauth_provider']."' AND oauth_uid = '".$fbuserData['oauth_uid']."'";
            $prevResult = $this->db->query($prevQuery);
            if($prevResult->num_rows > 0){
                //Update user data if already exists
                $query = "UPDATE ".$this->fuserTbl." SET first_name = '".$fbuserData['first_name']."', last_name = '".$fbuserData['last_name']."', email = '".$fbuserData['email']."' WHERE oauth_provider = '".$fbuserData['oauth_provider']."' AND oauth_uid = '".$fbuserData['oauth_uid']."'";
                $update = $this->db->query($query);
            }else{
                //Insert user data
                $query = "INSERT INTO ".$this->fuserTbl." SET oauth_provider = '".$fbuserData['oauth_provider']."', oauth_uid = '".$fbuserData['oauth_uid']."', first_name = '".$fbuserData['first_name']."', last_name = '".$fbuserData['last_name']."', email = '".$fbuserData['email']."'";
                $insert = $this->db->query($query);
            }
            
            //Get user data from the database
            $result = $this->db->query($prevQuery);
            $fbuserData = $result->fetch_assoc();
        }
        
        //Return user data
        return $fbuserData;
    }
}
?>