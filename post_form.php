<html>
<body>
<h2>This is a sample form.</h2>

<form method = "post" action = "post.php" name="post_form">
 <table>
	<tr>
	   <td>Name:</td> 
	   <td>
	   <input type = "hidden" name = "id" value="2">
	   <input type = "text" name = "name"></td>
	</tr>
	
	<tr>
	   <td>E-mail:</td>
	   <td><input type = "text" name = "email"></td>
	</tr>
	
	<tr>
	   <td>Specific Time:</td>
	   <td><input type = "text" name = "website"></td>
	</tr>
	
	<tr>
	   <td>Class details:</td>
	   <td><textarea name = "comment" rows = "5" cols = "40"></textarea></td>
	</tr>
	
	<tr>
	   <td>Gender:</td>
	   <td>
		  <input type = "radio" name = "gender" value = "female">Female
		  <input type = "radio" name = "gender" value = "male">Male
	   </td>
	</tr>
	
	<tr>
	   <td>
		  <input type = "submit" name = "submit" value = "Submit"> 
	   </td>
	</tr>
 </table>
</form>
</body>
</html>