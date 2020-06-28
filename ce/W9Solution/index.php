<!DOCTYPE html>
<html lang="en">
<?php include 'tools.php';?>
<head>
	<meta charset="utf-8">
	<title>A4 Sample</title>
</head>

<body>

	<table style="border:thick green solid;">
		<?php //printTable(); ?>
	</table>

	<p>
		<?php printCompare(); ?>
	</p>

<form action = "index.php" method="get"> //originally post
<fieldset style="width:30%;">
<legend>Customer</legend>
Name <input type="text" name="name"><br>
Email <input type="email" name="email"><br>
</fieldset>
<input type="submit" value="Order"><br>
</form>
<?php
preShow($_GET); // ie echo the $_GET or POST array
$session = preShow($_SESSION, true); // ie return $_SESSION as a string
echo $session;
?>

<p>
<?php printMyCode(); ?>
</p>
<?php
$days = ['Monday','Tuesday', 'Wed' , 'Sunday', 'Funday'];
$hours = [ '12pm', '3pm', '6pm', '9pm', '13pm' ];
foreach ( $days as $day ) {
foreach ( $hours as $hour ) {
echo '<p>'.$day.' '.$hour.': '.isFullOrDiscount( $day, $hour ).'</p>';
// or this → echo "<p>$day $hour: ".isFullOrDiscount( $day, $hour )."</p>";
}
}
?>

</body>
</html>