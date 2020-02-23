<?php
include ("myconnection.php");

$sql=" SELECT * FROM student";
$result=$conn->query($sql);

if($result->num_rows>0){
	while ($row =$result->fetch_assoc()) {

		echo "<br>id:".$row["id"]." - name:".$row["first_name"].$row["last_name"]."<br>";
		# code...
	}
}
else
{
	echo "0 result";
}

$conn->close();

?>