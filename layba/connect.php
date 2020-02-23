<?php

$host='localhost';
$username='root';
$password='';
$db='students';

$connect = mysqli_connect($host,$username,$password,$db);

if(!$connect)
{
	die("could not make connection". mysqli_error());
}

	echo "connect successfully";
mysqli_close($connect);