<?php
$to_email = "2018.aditya.kotkar@ves.ac.in";
$subject = "You have been Hacked xD";
$body = "Hi,nn This is test email send by PHP Script";
$headers = "Hacked";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}