<?php
include("connection.php");
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
?>

<html>
<body>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Username</td>
			<td>Email</td>
		</tr>
		<?php if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) { ?>
				<tr>
					<td><?php echo $row["id"]; ?> </td>
					<td><?php echo $row["first_name"]; ?> </td>
					<td><?php echo $row["last_name"]; ?> </td>
					<td><?php echo $row["username"]; ?> </td>
					<td><?php echo $row["email"]; ?> </td>
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