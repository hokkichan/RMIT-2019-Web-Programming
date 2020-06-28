<!DOCTYPE html>
<html lang="en">
<?php include 'tools.php';?>
<head>
	<meta charset="utf-8">
	<title>A4 Sample</title>
</head>

<body>

<form action = "index.php" method="post"> 

<?php checkName(); ?>

<fieldset style="width:30%;">
<legend>Customer</legend>
Name <input type="text" name="name"><br>
Email <input type="email" name="email"><br>
</fieldset>
<input type="submit" value="Order"><br>
</form>
<?php printPost(); ?>

	<table style="border:thick green solid;">
		<?php //printTable(); ?>
	</table>

	<p>
		<?php printIndexedArray(); ?>

		<?php printAssociativeArray(); ?>

		<?php printPizza(); ?>

		
	</p>



</body>
</html>