<?php

include 'connection.php';

extract($_POST);

$sql = "SELECT * FROM user where  email = '$email'";
$res = mysqli_query($con, $sql);

if($res->num_rows > 0){
    $sql = "SELECT * FROM user WHERE email = '$email' and password = '$pass'";
    $result = mysqli_query($con, $sql);
    if($result->num_rows > 0){
        $sql = "UPDATE user set password = 'newpass' WHERE email = '$email' and password = '$pass'";
        $resultupdate = mysqli_query($con, $sql);
        if($resultupdate>0){
            $response['message'] = "Update successful";
        }
        else{
            $response['message'] = "Update failed";
        }
    }
    else{
        $response['message'] = "Wrong password";
    }
}

else{
    $response['message'] = "User does not exist";
}

?>