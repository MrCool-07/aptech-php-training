<?php
   // Strict mode
   declare(strict_types=1);
   function sum(float ...$ints) {
      return array_sum($ints);
   }
   print(sum(2, 3, 4.1));
?>