<?php

if(isset($_POST['submit'])){
	include("connection.php");

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$username = $_POST['username'];

	$sql = "INSERT INTO student 
			(firstname, lastname, email,username)
			VALUES 
			('$firstname', '$lastname', '$email', '$username')";

	if ($conn->query($sql) === TRUE) {
	    // echo "New record created successfully - ".$conn->insert_id;
	    header("location: select.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}

?>

<html>
<body>
	<form action="insert_with_form.php" name="insert_data" method="post">
		<label>First Name :</label>
		<input name="firstname" type="text"><br><br>
		<label>Last Name :</label>
		<input name="lastname" type="text"><br><br>
		<label>Email :</label>
		<input name="email" type="email"><br><br>
		<label>Username :</label>
		<input name="username" type="text"><br><br>
		<input name="submit" type="submit" value="Insert Record">
	</form>
</body>