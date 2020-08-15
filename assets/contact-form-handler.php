<?php

/* Google CAPTCHA verification */
$secret = '6Lc15-YUAAAAAIwMCzwIHs8snDfBViKr6aknbkw9'; // Secret Google ReCaptcha server-side key
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=".$_POST['g-recaptcha-response'];
$verify = json_decode(file_get_contents($url));

// Check if any of the form fields are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
   echo "Invalid form input";
}

// If the Google Captcha is successful then we send the email
if($verify->success){
   $name = $_POST['name'];
   $email_address = $_POST['email'];
   $message = $_POST['message'];
   $phone = $_POST['phone'];

   // Create the email and send the message
   $recipient1 = "info@fastwayimmigration.com"; // This is where the form will send a message to.

   $email_subject = "Fastway Immigration Contact Form : $name";
   $email_body = "Hello, \n".
   "You have received a new message from your website (fastwayimmigration.com) contact form. \n \n".
   "Here are the details:\n\n".
      "Name    : $name \n \n".
      "Email   : $email_address \n \n".
      "Phone   : $phone \n \n".
      "Message : \n $message";

   $headers = "From: info@fastwayimmigration.com\n"; // This is the email address the generated message will be from
   $headers .= "Reply-To: $email_address";

   // Sending the actual message
   mail($recipient1,$email_subject,$email_body,$headers);
   header("Location: success.php");
   echo "Message Sent! We will be in touch shortly";
}
// Else show the Message failed page
else{
   header("Location: fail.php");
   echo "Sorry Something went wrong. Please try again.";
}

?>