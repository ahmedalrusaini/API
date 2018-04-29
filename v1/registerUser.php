<?php
$response = array();
require_once '../includes/DbOperations.php';
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    if (
        isset($_POST['username']) AND
        isset($_POST['password']) AND
        isset($_POST['email'])
        ){
            $db=new DbOperations();
            if($db->createUser(
                $_POST['username'],
                $_POST['password'],
                $_POST['email']
                )){
                $response['error']=false;
                $response['message']="Inserted Successfully";
            }else {
                $response['error']=true;
                $response['message']="Some error occurred please try again";
            }
    }else {
        $response['error']=true;
        $response['message']="Requires fields are missing";
    }
}else {
    $response['error']=true;
    $response['message']="Invalid Request";
}
echo json_encode($response);
?>