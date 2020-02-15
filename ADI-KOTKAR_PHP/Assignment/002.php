<!-- 2. Write a PHP script to split the following string.
Sample string : '082307'
Expected Output : 08:23:07 -->
<?php
    $str = '082307';
    $a = ':';
    $b = 2;
    echo 'Input: <br>'.$str.'<br> Output: <br>';
    substr_replace($str,':',$b,0);
    echo $str;
    // for($i=0;$i<strlen($str);$i++){
        
    //     if($i>2 && $i%2==0)

    // }

?>