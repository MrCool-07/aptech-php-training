<!-- 5. Write a PHP script to replace the first 'the' of the following string with 'That'. 
Sample date : 'the quick brown fox jumps over the lazy dog.'
Expected Result : That quick brown fox jumps over the lazy dog. -->
<?php
    //also use inbuilt function preg_replace
    $str = 'the quick brown fox jumps over the lazy dog.';
    $arr = explode(' ',$str);
    //print_r($arr);
    //echo sizeof($arr);
    //echo strlen($arr);
    for($i=0; $i<sizeof($arr);$i++){
        if($arr[$i]=='the'){
            //echo $arr[$i];
            $arr[$i] = 'That';
            break;
        }
        
    }
    echo implode(" ",$arr);
?>
