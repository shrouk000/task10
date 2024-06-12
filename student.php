<?php
include('./shams.php');
$name ="ALi ALO";
$info ="15522";
$email = "ali34@test.com";
$password="2024-06-11";
$query="INSERT INTO `student`( `name`, `contact_info`, `email`, `password`) 
VALUES ('$name','$info','$email','$password')";
$conn->exec($query);
echo"<br>Data INstert successfully";



?>