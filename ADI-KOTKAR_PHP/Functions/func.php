<?php
    $a = "Aditya Vilas";
    $b = "Kotkar";

    function myName($fname,$lname){
        $c = $fname." ".$lname;
        echo $c;
        echo "Length is: ".strlen($c);
    }

    myName($a,$b);
?>