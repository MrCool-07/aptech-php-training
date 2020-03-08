<?php

/*

Reference:
XAMPP Settings:
https://meetanshi.com/blog/send-mail-from-localhost-xampp-using-gmail/

Google Settings:
1. Go to Manage My Account
2. Go to Security Tab
3. Enable 2-Step Authentication
4. Generate app password - used in sendmail.ini
*/

$to_email = "pbketkale@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi,This is test email send by PHP Script";
$headers = "From: sender\'s email";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}