<?php
include 'connection.php';

$id = $_POST["id"];

$data=mysqli_query($con,"select name from reg where id = '$id'");

if(mysqli_num_rows($data)>0)
{
    $row=mysqli_fetch_assoc($data);
    $response['name']=$row['name'];
}
else
{
    $response['message']="failed";
}
echo json_encode($response);
?>