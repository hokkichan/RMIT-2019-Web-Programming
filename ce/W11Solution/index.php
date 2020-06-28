<!DOCTYPE html>
<html lang="en">
<?php include 'tools.php';?>
<head>
	<meta charset="utf-8">
	<title>A4 Sample</title>
</head>

<body>

	<?php $errorsFound = 0; ?>

<form action = "receipt.php" method="post"> 

<?php 



if(!empty($_POST)) 
{
if (empty ($_POST['name']))
 {
 	$errorsFound++;
 }
 if (empty ($_POST['email']))
 {
 	$errorsFound++;
 }
 else 
 {
 if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
 {
 	$errorsFound++;
 }
}
} 

?>

<fieldset style="width:30%;">
<legend>Customer</legend>
Name <input type="text" name="name"><br>
Email <input type="email" name="email"><br>
Seats STA <input type="text" name="seatsSTA"><br>
</fieldset>
<input type="submit" value="Order"><br>
<input type="submit" value="Clear Session" name="clear-session"><br>


</form>

<?php
if ($errorsFound >0) {
echo 'Number of errors found: ' . $errorsFound . '<br>';
}
else{
	if (!empty($_POST))
	{
		sendToSession();
	}
}
?>

</body>
</html>