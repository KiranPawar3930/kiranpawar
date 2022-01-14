<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "karan3930@gmail.com";
$sub = "mail from website";
$txt ="Name = ". $name . "\r\n Email = " . $email . "Subject = ". $subject "\r\nMessage =" . $message;

$headers ="From: karan3930@gmail.com";
if($email!=NULL){
	mail($to,$sub,$txt,$headers);
}
header("Location:thankyou.html");
?>