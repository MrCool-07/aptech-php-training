<?php
$bill_amount = 0;
function totalUnits($units){
    if(count($_POST) > 0 && isset($_POST['units'])){
        $a = $_POST['units'];
        
        if(empty($_POST['units'])){
            $bill_amount = "Nothing Selected";
        }else if(!is_numeric($_POST['units'])){
            $bill_amount = "Invalid Input";
        }
        else if( $a >= 250){
            $bill_amount = 6.50 * $a;
        }
        else{
            if ($a >= 50){
                $bill_amount = 50 * 3.5;
                $remaining_units = $a - 50;
            }
    
            if($remaining_units >= 100){
                $bill_amount = $bill_amount + (100 * 4);
                $remaining_units = $remaining_units - 100;
            }
            else{
                $bill_amount = $bill_amount + ($remaining_units * 4);
                $remaining_units = $remaining_units - 100;	
            }
    
            if($remaining_units >= 100){
                $bill_amount = $bill_amount + (100 * 5.20);
                $remaining_units = $remaining_units - 100;
            }
            else{
                $bill_amount = $bill_amount + ($remaining_units * 5.20);
            }
        }
        return $bill_amount;
    }
}
?>