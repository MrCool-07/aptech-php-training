<?php

class A{
	var $a;
	var $b;

	function __construct($a, $b){
		$this->a = $a;
		$this->b = $b;
	}

	function add(){
		$c = $this->a + $this->b;
		return $c;
	}
}


$objectOfA = new A(8, 9);

echo "Addition: ".$objectOfA->add();
