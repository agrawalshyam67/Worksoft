<?php
 
 echo "Your message has been sent successfully";

$uemail = $_POST['userEmail'];
$premail = $_POST['profEmail'];
$message = $_POST['msg'];


// Create the email and send the message
$to = $premail; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Message from Worksoft";
$email_body = "You have received a new message from Worksoft.\n\n"."Here are the details: \n\nEmail:  $uemail\n\nMessage:\n$message";
$headers = "From: worksoft@meetyourit.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $premail";   
mail($to,$email_subject,$email_body,$headers);
return true; 

        
?>