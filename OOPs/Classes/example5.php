<?php

// Access Modifiers

class person{

	var $name;
	public $height;
	protected $social_insurance;
	private $pinn_number;

	function _construct($name){
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}

	public function setHeight($height){
		$this->height = $height;
	}

	public function getHeight(){
		return $this->height;
	}

	public function setPinNumber($pinNumber){
		$this->pinn_number = $pinNumber;
	}

	public function getPinNumber(){
		return $this->pinn_number;
	}
}

$objectOfPerson = new person("Aptech");

echo $objectOfPerson->getName();
$objectOfPerson->setHeight(6.2);
echo "<br><br>Using Function: ". $objectOfPerson->getHeight();

echo "<br><br>Using Direct Variable: ". $objectOfPerson->height;

$objectOfPerson->setPinNumber(400706);
// echo "<br><br>Using Direct Variable Pin: ". $objectOfPerson->pinn_number;

echo "<br><br>Using Member Method: ". $objectOfPerson->getPinNumber();
