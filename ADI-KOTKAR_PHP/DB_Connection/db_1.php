<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'Students';
    
    $connect = mysqli_connect($host,$username,$password,$db);

    if(!$connect){
        die('Could not make connection'.mysqli_error());
    }
    else{
        echo "Successfully made";
        mysqli_close($connect);
    }
?>
