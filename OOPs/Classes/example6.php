<?php
// Inheritance
// Base Class or Parent Class
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

// Child Class 1
class kid extends person{
	
}
// Child Class 2
class adult extends person{

}

$objectOfKid = new kid();
$objectOfKid->setHeight(3.3);
echo $objectOfKid->getHeight();

$objectOfAdult = new adult();
$objectOfAdult->setHeight(6.0);
echo "<br><br>".$objectOfAdult->getHeight();

