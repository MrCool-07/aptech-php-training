<?php

/*
1. Function Declaration - function add($var1, $var2)
	- Function Name
	- Function parameters/arguments
2. Function Definition
	function add($var1, $var2){
		$var3 = $var1 + $var2;
		echo $var3;	
	} 
3. Function Body
	- Set of Instructions
	$var3 = $var1 + $var2;
	echo $var3;
4. Function call
	- function name 
	- arguments
	e.g. add(3,4);
*/

$var1 = 4;
$var2 = 5;

add($var1, $var2);
add(3, 5);
add(3.5, 5);

// add("Aptech", "Education");

function add($var1, $var2){
	$var3 = $var1 + $var2;
	echo "<br> $var3";
}

?>