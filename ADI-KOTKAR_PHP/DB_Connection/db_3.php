<?php
    //OOP METHOD

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'Students';

    $conn = new mysqli($servername, $username, $password,$db);

    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }

    global $conn;
?>