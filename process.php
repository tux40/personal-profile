<?php ob_start();



	if(isset($_POST['submit'])) {

	$to = "aria40nanda@gmail.com";
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$txt = $_POST['message'];
	$headers = "From: " .$email . "\r\n" .
	"CC: aria40nanda@gmail.com";

	mail($to,$subject,$txt,$headers);

	header("Location: contact.html");




	}




?>
