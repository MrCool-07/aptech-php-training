<?php


$name="082307";
$split_name = str_split($name, 2);

// var_dump($split_name);
echo implode(":", $split_name);
?>