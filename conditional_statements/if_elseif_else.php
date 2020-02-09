<?php

$var1 = 50;
$var2 = 10;

if ($var1 < $var2){
	echo "Var1 is less than var2.";
}
else if($var1 > $var2){
	echo "Var1 is greater than var2.";
}
else if($var1 == $var2){
	echo "Var1 equals Var2";
}
else{
	echo "I will never be executed.";
}