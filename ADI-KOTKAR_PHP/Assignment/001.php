<!-- 1. Write a PHP script to :
a) transform a string all uppercase letters.
b) transform a string all lowercase letters.
c) make a string's first character uppercase.
d) make a string's first character of all the words uppercase. -->
<?php
    $str = 'My name is Aditya!';
    echo "Srting Entered:  $str <br>";
    echo strtoupper($str).'<br>';
    echo strtolower($str).'<br>'; 
    echo ucfirst($str).'<br>'; 
    echo ucwords($str);

?>