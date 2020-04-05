<?php
/* Check for empty name, email, message fields and whether an email address
is invalid format */
/* VERIFY the CAPTCHA*/
$secret = '6Lc15-YUAAAAAIwMCzwIHs8snDfBViKr6aknbkw9'; // Secret Google ReCaptcha server-side key
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=".$_POST['g-recaptcha-response'];
$verify = json_decode(file_get_contents($url));

if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
      echo "No arguments Provided!";
      return false;
}

if($verify->success){
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
   $result = '<div class="alert alert-success">Thank You! I will be in touch</div>';
   echo $result
   }
   else{
      $result = '<div class="alert alert-danger">Sorry there was an error sending your message! Please try again</div>';
      echo $result
   }
?>