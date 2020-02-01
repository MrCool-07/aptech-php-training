<?php
echo "<pre>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	echo "<br> This is POST method<br>";
	print_r($_POST);
}
else if ($_SERVER["REQUEST_METHOD"] == "GET"){
	echo "<br> This is GET method<br>";
	print_r($_GET);
}
else{
	echo "No form submission";
}
?>