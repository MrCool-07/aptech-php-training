<?php

session_start();

echo "<pre> Before removing session key - <br>";
print_r($_SESSION);

echo "After removing key <br>";
unset($_SESSION['counter']);

print_r($_SESSION);
