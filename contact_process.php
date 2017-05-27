<?php
	$user_name = $_POST['name'];
	$user_email = $_POST['email'];
	$to = "adam@reversedout.com";
	$subject = "Contact Request from Hubahuba";
	$message = "Below are details of User : \n";
	$message .= "Username  : $user_name \n";
	$message .= "Email : $user_email \n";
	$from = "adam@reversedout.com";
	$headers = "From:" . $from;
	mail($to,$subject,$message,$headers);
	header('Location: index.html');
	exit;
?>