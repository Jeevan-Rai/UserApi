<?php

include 'connection.php';

$sql = "SELECT id, uname, email FROM user";

$res = mysqli_query($con, $sql);

if($res->num_rows > 0){

    while($row = mysqli_fetch_assoc($res)){
        $response['status'] = "001";
        $response['users'][] = $row;
    }
}
else {
    $response['status'] = "000";
    $response['users'] = (object)[];
}

echo json_encode($response);

?>