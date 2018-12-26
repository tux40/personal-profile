<?php 



	// if(isset($_POST['submit'])) {

	// $to = "aria40nanda@gmail.com";
	// $subject = $_POST['subject'];
	// $email = $_POST['email'];
	// $txt = $_POST['message'];
	// $headers = "From: webmaster@example.com" .$email . "\r\n" .
	// "CC: aria40nanda@gmail.com";

	// mail($to,$subject,$txt,$headers);

	// header("Location: contact.html");
	// }


    //if "email" variable is filled out , send mail 
    if  (isset (REQUEST['email'])){ 
    
	//email information 
	$admin_email  = "aria40nanda@gmail.com";
	$email = $_REQUEST['email'];
	$subject = $_REQUEST['subject']; 
	$txt = $REQUEST['message']; 
	
	//send mail 
	mail($admin_email, "$subject", $txt, "From:" . $email); 
	
	//email response 
	echo "thank you for contacting us ";
	}
	
	
	
	
	




?>
