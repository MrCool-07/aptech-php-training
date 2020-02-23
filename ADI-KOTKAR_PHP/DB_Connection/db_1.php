<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'Students';
    
    $connect = mysqli_connect($host,$username,$password,$db);

    if(!$connect){
        die('Could not make connection');
    }
    else{
        echo "Successfully made";
    }
?>
