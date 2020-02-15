<?php

$cookie_name = "user";
$cookie_value = "Pradeep";

setcookie(  $cookie_name, 
			$cookie_value, 
			time() - 3600, 
			"/");