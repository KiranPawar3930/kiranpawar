<?php

$name = $_POST['name'];
$email = $_POST['email'];
$project = $_POST['project'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "karan3930@gmail.com";

mail($recipient,$project,$message,$mailheader)

or die("Error!");

echo"message sent"; 
?>