<?php
include 'connection.php';



$name=$_POST["name"];
$age=$_POST["age"];
$email=$_POST["email"];
$pwd=$_POST["pwd"];

 $query=mysqli_query($con,"INSERT INTO `reg`( `name`, `age`, `email`, `pwd`) VALUES ('$name','$age','$email','$pwd')");
 if($query)
 {
    $response['message']="success";
   
}
 else
 {
    $response['message']="failed";
 }
 echo json_encode($response);

?>

