<!-- You need to write a PHP program to calculate electricity bill using if-else conditions.

Conditions:

For first 50 units – Rs. 3.50/unit
For next 100 units – Rs. 4.00/unit
For next 100 units – Rs. 5.20/unit
For units above 250 – Rs. 6.50/unit

1. Write one program by assuming units as input 
2. Write one program with form to take input from user for units & then calculate & show output in browser after form submision. -->
<?php
    $units = 250;
    $total = 0;

    if($units<=50){
        $total = ($units*3.50);
    }
    else if($units<=150){
        echo $total;
        $total = 175 + (($units-50)*4.0);
    }
    else if($units<=250){
        $total = 575 + (($units-150)*5.20);
    }
    else if($units>250){
        $total = 1095 + (($units-250)*6.50);
    }

    echo $total;
?>
