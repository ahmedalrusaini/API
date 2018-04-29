<?php 
$response = array();
if (isset( $_GET["submit"] )){
$response["NAME"] = "Ahmed ALRUSAINI";
$response["PHONE"] = "0565525661";
$response["AGE"] = "10";
$response["error"] = FALSE;
}else{
    $response["error"] = TRUE;
}
echo json_encode($response);
?>