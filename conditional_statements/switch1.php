<?php

/*
Value between 1 & 3
	- Start of the week
Value 4 & 5
	- Mid of the week
Value 6 & 7
	- End of the week
*/
$day = 7;

switch($day){
	case 1:
	case 2:
	case 3:
		echo "Start of the week.";
		break;
	case 4:
	case 5:
		echo "Mid Of the week.";
		break;
	case 6:
	case 7:
		echo "End of the week.";
		break;
	default:
		echo "Value incorrect. Please specify value between 1 to 7.";
		break;
}