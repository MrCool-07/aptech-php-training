<?php

// 1 2 3 4 5
class factorial{
	private $factorial;

	public function getFactorial($num){
		$this->factorial = 1;
		for($i=1; $i <= $num; $i++){
			$this->factorial = $this->factorial * $i;
		}
		return $this->factorial;
	}
}

$f = new factorial();
echo $f->getFactorial(5);