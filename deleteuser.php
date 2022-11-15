<?php

include 'connection.php';

$id = $_REQUEST['id'];

$sql = "DELETE FROM user where id='$id'";
$res = mysqli_query($con, $sql);

if($res){
    $response['status'] = "Deleted successfuly";
}
else{
    $response['status'] = "Deletion Failed";
}


echo json_encode($response);

?>