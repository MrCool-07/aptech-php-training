<?php
/*
Param1 - String to search
Param2 - String to replace
Param3 - Source String
*/

$blog = 'Your Blog is Excellent!';
echo "<br> Original String - $blog";
echo "<br> After str_replace - ";	
echo str_replace("Excellent","Poor", $blog);