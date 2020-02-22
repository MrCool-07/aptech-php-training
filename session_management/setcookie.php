<?php

/*

setcookie(  name, 
			value, 
			expire, 
			path, 
			domain, 
			secure, 
			httponly
);

*/

$cookie_name = "user";
$cookie_value = "Pradeep";

setcookie(  $cookie_name, 
			$cookie_value, 
			time() + (86400 * 30), 
			"/"); // 86400 = 1 day

echo "Cookie $cookie_name is set with value \"$cookie_value\"";


echo "<br><br>";
echo "Click <a href='getcookie.php'>here</a> to check cookie values.";

echo "<br><br>";
echo "Click <a href='destroy_cookie.php'>here</a> to destroy/expire cookie values.";
?>