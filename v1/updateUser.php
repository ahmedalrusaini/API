<?php
$response = array();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (
        isset($_POST["id"])
        AND isset($_POST["username"])
        ){
    $hostname="localhost";
    $username="root";
    $password="";
    $dbname="android01";
    $conn=mysqli_connect($hostname,$username,$password,$dbname);
    $id = $_POST["id"];
    $username = $_POST["username"];
    $sql="UPDATE `users`".
         " set `username` = '{$username}'".
         " WHERE `id` = {$id}";
    if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn)>0) {
        $response["msg"] = "success";
    }else {
        $response["msg"] = "error";
    }
if (isset($conn)){
    mysqli_close($conn);
}
echo json_encode($response);
}
}
?>