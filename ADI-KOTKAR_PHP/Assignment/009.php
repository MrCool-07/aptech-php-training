<!--from validation to be added-->

<?php 
    //include 'function_1.php';
    require 'function_1.php';
?>

<form name="units" method="post" action="009.php">
	<input type="text" name="units">
	<input type="submit" name="submit">
</form>

<h2>
	Total Bill: <?php echo totalUnits($_POST['units']) ?>
</h2>