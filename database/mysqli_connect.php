<?php  

// Connect with database with Procedural Method

$host = 'localhost';  
$user = 'root';  
$pass = ''; 
$db = 'students';

$conn = mysqli_connect($host, $user, $pass, $db);

if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}
echo 'Connected successfully';