<?php

include 'connection.php';

extract($_POST);

$CheckQuery = "SELECT * FROM user WHERE email = '$email'";
$result = mysqli_query($con, $CheckQuery);
if($result->num_rows > 0){
    $response['status'] = "2";;
    $response['message'] = "User Exist";
}

else{

$sql = "INSERT INTO user(uname, email, password) values('$uname', '$email', '$pass')";
$res = mysqli_query($con, $sql);

if($res){
    $response['status'] = "0";
    $response['message'] = "Successfuly registered";
}

else{
    $response['status'] = "1";
    $response['message'] = "Failed to Register";
}

}
echo json_encode($response);
