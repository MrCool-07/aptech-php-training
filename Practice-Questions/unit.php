<?php

$bill_ammount=0;
$a=$_POST['form'];
if(isset($_POST['unit.php']))
    if($a>250)
    {
        $bill_ammount=6.5*$a;

    }
    else
    {
        if($a>=50)
        {
            $bill_ammount=50*3.5;
            $remaining_units =$a-50;

        }
        if($remaining_units>=100)
        {
            $bill_ammount=$bill_ammount+(100.4);
            $remaining_units=$remaining_units-100;

        }
        else
        {
            $bill_ammount=$bill_ammount+($remaining_units*4);
            $remaining_units=$remaining_units-100;
        }
        if($remaining_units>=100)
        {
            $bill_ammount=$bill_ammount+(100+5.20);
            $remaining_units=$remaining_units-100;

        }
        else
        {
            $bill_ammount=$bill_ammount+($remaining_units*5.20);
        }
    }

    echo $bill_ammount;



    ?>