<!-- 2. Write a PHP script to split the following string.
Sample string : '082307'
Expected Output : 08:23:07 -->
<?php
    $str = '082307';
    echo $str.'<br>';
    $split = str_split($str,2);
    
    echo implode(":",$split);
    

?>