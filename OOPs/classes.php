<?php

class A{
	var $a;
	var $b;
	function set_a($value){
		$this->a = $value;
	}

	function set_b($value){
		$this->b = $value;
	}

	function add(){
		$c = $this->a + $this->b;
		return $c;
	}
}


$objectOfA = new A();

$objectOfA->set_a(8);
$objectOfA->set_b(9);
echo $objectOfA->add();
