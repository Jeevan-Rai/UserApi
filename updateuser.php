<?php

include 'connection.php';

extract($_POST);

$id = $_REQUEST['id'];

$sql = "UPDATE user set uname = '$uname', email = '$email' WHERE id = '$id'";
$res = mysqli_query($con, $sql);

if($sql){
    $response['status'] = "Update success";
}
else{
    $response['status'] = "Update failed";
}

echo json_encode($response);
?>