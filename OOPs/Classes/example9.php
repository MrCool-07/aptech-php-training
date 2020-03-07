<?php
// Polymorphism - Method Overriding

class addition{

	protected $first_number;
	protected $second_number;

	function __construct($first, $second){
		$this->first_number = $first;
		$this->second_number = $second;
	}

	public function add(){
		return $this->first_number + $this->second_number;
	}

}

class child extends addition{
	public function add(){
		return $this->first_number + $this->second_number;	
	}
}
$objectA = new child(8, 9);
echo "<br>".$objectA->add();

