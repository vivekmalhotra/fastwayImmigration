<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];

// Create the email and send the message
$recipient1 = "info@fastwayimmigration.com"; // This is where the form will send a message to.

$email_subject = "FastwayImmigration Contact Form : $name";
$email_body = "You have received a new message from your website (fastwayimmigration.com) contact form. \n \n".
"Here are the details:\n\n".
   "Name    : $name \n \n".
   "Email   : $email_address \n \n".
   "Phone   : $phone \n \n".
   "Message : \n $message";

$headers = "From: info@fastwayimmigration.com\n"; // This is the email address the generated message will be from
$headers .= "Reply-To: $email_address";
mail($recipient1,$email_subject,$email_body,$headers);
echo "Thank you! - We will reach out to you soon.";
return true;
?>