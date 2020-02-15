<!-- 4. Write a PHP script to extract the file name from the following string.
Sample String : 'www.example.com/public_html/index.php'
Expected Output : 'index.php' -->
<?php
    $str = 'www.example.com/public_html/index.php';
    $arr = explode('/',$str);
    $last_pos = count($arr);
    echo $arr[$last_pos-1];
?>