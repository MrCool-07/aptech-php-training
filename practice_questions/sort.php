<?php

// 1 2 3 4 5
class sort{
	private $sort_array;

	public function sort_array(){
		$this->sort_array = array(11, -2, 4, 35, 0, 8, -9);
		sort($this->sort_array);
		return $this->sort_array;
	}
}

$f = new sort();

print_r($f->sort_array());