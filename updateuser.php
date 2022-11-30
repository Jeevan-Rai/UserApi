<?php

include 'connection.php';

extract($_POST);


$sql = "UPDATE user set uname = '$uname', email = '$email' WHERE id = '$id'";
$res = mysqli_query($con, $sql);

if($sql){
    $response['status'] = 000;
    $response['message'] = "Update Successful";
}
else{
    $response['status'] = 001;
    $response['message'] = "Update Failed";
}

echo json_encode($response);
?>