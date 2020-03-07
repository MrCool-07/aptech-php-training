<?php

include("example1.php");

$objectOfA = new A();

$objectOfA->set_a(15);
$objectOfA->set_b(15);

echo "<br><br>Value of A : ". $objectOfA->a;

echo "<br><br>Value of b : ". $objectOfA->b;
