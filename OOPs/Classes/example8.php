<?php
// Polymorphism - Method Overloading

class addition{

	private $first_number;
	private $second_number;

	function __construct($first, $second){
		$this->first_number = $first;
		$this->second_number = $second;
	}

	public function add(){
		return $this->first_number + $this->second_number;
	}

	public function add($first, $second){
		return $first + $second;
	}
}

$objectA = new addition(8, 9);
echo "<br>".$objectA->add();
echo "<br>".$objectA->add(15, 15);

