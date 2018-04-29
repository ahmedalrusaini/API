<?php
class DbConnect{
    
    private $con;
    
    function __construct(){
    }
    
    function connect(){
        include_once dirname(__FILE__).'/Constants.php';
        
        //$this->con = new mysqli(DB_HOST,DB_NAME,DB_PASS,DB_NAME);
        
        $hostname="localhost";
        $username="root";
        $password="";
        $dbname="android01";
        $this->con = $conn=mysqli_connect($hostname,$username,$password,$dbname);
        
        if (mysqli_connect_errno()){
            echo "Failed to connect with database".mysqli_connect_error();
        }
        
        return $this->con;
    }
    
}
?>