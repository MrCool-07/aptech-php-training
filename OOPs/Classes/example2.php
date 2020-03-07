<?php

include("example1.php");

$objectOfA = new A();

$objectOfA->set_a(15);
$objectOfA->set_b(15);

$anotherObject = new A();

$anotherObject->set_a(16);
$anotherObject->set_b(16);

echo "<br><br>Called in Example 2: ". $objectOfA->add();

echo "<br><br>Called in Example 2: ". $anotherObject->add();