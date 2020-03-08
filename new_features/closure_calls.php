<?php
/*

See - anonymous_functions.php

*/

class A {
	private $x = 1;
	public function addOne(){
		$this->x += 1;
	}
}

// Pre PHP 7 code
$getX = function() {
	// $this->addOne();
	return $this->x;
};

$addTwo = function(){
	$this->x += 2;
	return $this->x;
};

// $objectOfA = new A();
// $objectOfA->addOne();


$getXCB = $getX->bindTo(new A, 'A'); // intermediate closure
echo $getXCB();

// PHP 7+ code
$getX = function() {
	// $this->addTwo();
	return $this->x;
};

echo "<br>".$getX->call(new A);


echo "<br>".$addTwo->call(new A);