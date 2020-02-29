<?php
include("connection.php");

/*

URL : "http://localhost/aptech-php-training/database/MySqli/edit.php?id=1"

*/

$id = "";

if(isset($_POST['submit'])){

	$id = $_POST['id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$username = $_POST['username'];

	$sql = "UPDATE student SET 
			firstname = '$firstname',
			lastname = '$lastname',
			email = '$email',
			username = '$username'
			WHERE
			id = '$id'
	";

	if ($conn->query($sql) === TRUE) {
	    // header("edit.php?id=".$id);
	    header("location: select.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

if(isset($_GET['id'])){
	$id = $_GET['id'];
}

if(!empty($id)){
	$sql = "SELECT * FROM student WHERE id = ".$id;
	// SELECT * FROM student WHERE id = 1;
	$result = $conn->query($sql)->fetch_assoc();
}
else{
	die("No record selected.");
}

$conn->close();
?>

<html>
<body>
	<form action="edit.php" name="update_data" method="post">
		<input type="hidden" name="id" value="<?php echo $id ?>">
		<label>First Name :</label>
		<input name="firstname" type="text" value="<?php echo $result['firstname'] ?>">
		<br><br>
		<label>Last Name :</label>
		<input name="lastname" type="text"
		value="<?php echo $result['lastname'] ?>"
		><br><br>
		<label>Email :</label>
		<input name="email" type="email"
		value="<?php echo $result['email'] ?>"
		><br><br>
		<label>Username :</label>
		<input name="username" type="text"
		value="<?php echo $result['username'] ?>"
		><br><br>
		<input name="submit" type="submit" value="Update Record">
	</form>
</body>