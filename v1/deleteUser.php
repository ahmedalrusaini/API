<?php
$response = array();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["id"])){
    $hostname="localhost";
    $username="root";
    $password="";
    $dbname="android01";
    $conn=mysqli_connect($hostname,$username,$password,$dbname);
    $id = $_POST["id"];
    $sql="DELETE FROM `users` WHERE `id` = {$id}";
    if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn)>0) {
        $response["msg"] = "success";
    }else {
        $response["msg"] = "error";
    }
}
if (isset($conn)){
    mysqli_close($conn);
}
echo json_encode($response);
}
?>