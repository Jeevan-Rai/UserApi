<?php

include 'connection.php';

$sql = "SELECT * FROM user";

$res = mysqli_query($con, $sql);

if($res->num_rows > 0){

    while($row = mysqli_fetch_assoc($res)){
        $response['users'][] = $row;
    }
}

echo json_encode($response);

?>