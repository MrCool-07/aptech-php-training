<?php
/*

Anonymous functions, also known as closures, allow the creation of functions which have no specified name. They are most useful as the value of callback parameters, but they have many other uses.

Anonymous functions are implemented using the Closure class.

*/

/*

preg_replace ( mixed $pattern , 
				mixed $replacement , 
				mixed $subject [, int $limit = -1 [, int &$count ]] 
			) : mixed

*/
			// echo "<pre>";

/*

function add() : int{
	//code here
}

*/

/*
~-([a-z])~
*/
$sourceString = "hello-frf-world";
echo "Source String: ". $sourceString;
echo "<br>Replaced String: ";
echo preg_replace_callback(
	'~-([a-z])~', 
	function ($match) {
    	return strtoupper($match[1]);
	}, 
	$sourceString
);

// echo $sourceString;
// $output = preg_replace("/Sublime/", "<b>Sublime</b>", $sourceString);
// echo "<br>";
// echo $output;
?>