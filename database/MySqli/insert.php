<?php
include("connection.php");
$id = 4;
$sql = "INSERT INTO student 
		(id, first_name, last_name, email,username)
		VALUES 
		($id, 'John', 'Doe', 'john@example.com', 'johndoe')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>