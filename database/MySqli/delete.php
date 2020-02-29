<?php
include("connection.php");

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE FROM student WHERE id = $id";
	if($conn->query($sql) == TRUE){
		// echo "Record deleted successfully";
		header("location: select.php");
	}
	else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
else{
	echo "No record to delete.";
}

?>