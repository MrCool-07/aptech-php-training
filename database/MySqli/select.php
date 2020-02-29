<?php
include("connection.php");
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
?>

<html>
<body>
	<a href="insert_with_form.php">New Record</a>
	<br><br>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Username</td>
			<td>Email</td>
			<td>Action</td>
		</tr>
		<?php if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) { ?>
				<tr>
					<td><?php echo $row["id"]; ?> </td>
					<td><?php echo $row["firstname"]; ?> </td>
					<td><?php echo $row["lastname"]; ?> </td>
					<td><?php echo $row["username"]; ?> </td>
					<td><?php echo $row["email"]; ?> </td>
					<td>
						<a href="view.php">View</a>&nbsp;|&nbsp;<a href="edit.php?id=<?php echo $row["id"] ?>">Edit</a>&nbsp;|&nbsp;
						<a href="delete.php?id=<?php echo $row["id"] ?>">Delete</a>
					</td>
				</tr>
		<?php } //while loop close 
			} // If close
		?>
	</table>
</body>
</html>

<?php
$conn->close();
?>