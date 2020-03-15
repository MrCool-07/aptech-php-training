<?php
#1. Write a PHP class that calculates the factorial of an integer

class Fact {
    // Properties
    public $num ;
  
    // Methods
    function factorial($num) {
      $f=1;
      $this->num = $num;
      for($i=1; $i<=$num; $i++){
          $f = $f*$i;
      }
      echo $f;
    }
    
  }

  $one = new Fact();
  $one->factorial(3);


?>