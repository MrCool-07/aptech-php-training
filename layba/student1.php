<?php
include ("myconnection.php");

$sql=" SELECT * FROM student";
$result=$conn->query($sql);
?>


<html>

<body>
 <table border="1">
 	<tr>
 		<td>ID</td>
 		<td>First Name</td>
 		<td>Last name</td>
 		<td>Email</td>
 		<td>Password</td>
 	</tr>
 
<?php
if($result->num_rows>0){
	while ($row =$result->fetch_assoc()) {

?>
  
  <tr>
  	<td><?php echo $row["id"]?></td>
  	<td><?php echo $row["first_name"]?></td>
  	<td><?php echo $row["last_name"]?></td>
  	<td><?php echo $row["email"]?></td>
  	<td><?php echo $row["password"]?></td>

  </tr>
  <?php
  }	
}
?>

  
 

 </table>
</body>
</html>

<?php
$conn->close();

?>