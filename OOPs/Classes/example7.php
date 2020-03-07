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
	public function getPinNumber(){
		return $this->pinn_number;
	}

	public function getSocialInsurance(){
		return $this->social_insurance;
	}
}

$objectOfKid = new kid();
// echo $objectOfKid->getPinNumber();
echo $objectOfKid->getSocialInsurance();


