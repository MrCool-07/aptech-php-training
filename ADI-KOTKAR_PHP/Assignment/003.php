<!-- 3. Write a PHP script to check whether a string contains a specific string?
Sample string : 'The quick brown fox jumps over the lazy dog.'
Check whether the said string contains the string 'jumps' -->
<?php
    $str = 'The quic brown fox jumps over the lazy dog.';
    echo strpos($str,'jumps') ? 'true' : 'false';
?>