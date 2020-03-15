<?php
try{
	$var1 = 1;
	$var2 = 3;
	throw new Exception("Error Processing Request");
}
catch(Throwable $t){
	echo "---".$t->getMessage();
}
catch(Exception $e){
	echo $e->getMessage();
}
echo "<br>This is after Exception";
