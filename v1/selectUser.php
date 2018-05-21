<?php
$response = array();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (
        isset($_POST["id"])
        ){
    $hostname="localhost";
    $username="root";
    $password="";
    $dbname="android01";
    $conn=mysqli_connect($hostname,$username,$password,$dbname);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    
    $query="SELECT username".
           " FROM `users`".
           " WHERE `id` = {$id}";
    $result=mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result)>0) {
        while ($row= mysqli_fetch_array($result)){
            $response["user"] = $row["username"];
            $response["msg"] = "success";
        }
    }else {
        $response["msg"] = "error";
    }

    
    if (isset($result)){
        mysqli_free_result($result);
    }
    if (isset($conn)){
        mysqli_close($conn);
    }
    echo json_encode($response);
    }
}
?>