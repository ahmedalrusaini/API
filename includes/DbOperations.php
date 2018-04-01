<?php

class DbOperations{
    
    private $con;
    
    function __construct(){
        require_once dirname(__FILE__).'/DbConnect.php';
        
        $db=new DbConnect();
        
        $this->con = $db->connect();
    }
    
    function createUser($user,$pass,$email){
        $password = md5($pass);
        $query = "insert into users(username,password,email)values(?,?,?)";
        $stmt=$this->con->prepare($query);
        $stmt->bind_param("sss", $user,$pass,$email);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
        
    }
    
}

?>