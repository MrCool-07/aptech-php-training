<?php

// 2. Write a PHP class that sorts an ordered integer array with the help of sort() function.
// Sample array : array(11, -2, 4, 35, 0, 8, -9)
// Output : Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 )
class Sorter{

    public $array;

    function sort(){
        $this->array = array(5,4,3,2,1);
        
        for($i=0; $i<count() ; $i++){
            if($this->array[$i]>$this->array[$i+1]){
                $ele = $this->array[$i];
                $this->array[$i] = $this->array[$i+1];
                $this->array[$i+1] = $ele;
            }
        }
        print_r($this->array);
    }

}
    //$my = array(2,4,5,1,3);
    //echo sizeof();
  $one = new Sorter();
  $one->sort();

?>