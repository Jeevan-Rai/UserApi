<?php

include 'connection.php';

$id = $_POST['id'];

$sql = "DELETE FROM user where id='$id'";
$res = mysqli_query($con, $sql);

if($res){
    $response['status'] = 100;
    $response['message'] = "Deleted successfuly";
}

else{
    $response['status'] = 200;
    $response['message'] = "Deletion Failed";
}


echo json_encode($response);
?>