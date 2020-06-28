<?php 
include 'tools.php';
if ( empty( $_SESSION['email'] || $_SESSION['name'] )) //|| $_SESSION['movie'] || $_SESSION['seats'] ) // ... == seats and cust checks
{
	header('Location: index.php');
	exit;
}
  
	;?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Order completed</title>
	
</head>

<body>
<p>
	<?php  echo 'Thank you for order, your input: ' . $_SESSION['email'] . $_SESSION['name'];
	?>
</p>

<?php
$list = array (
  array("Peter", "Griffin" ,"Oslo", "Norway"),
  array("Glenn", "Quagmire", "Oslo", "Norway")
);

$file = fopen("order.txt","a");
flock($file, LOCK_SH);
foreach ($list as $line) {
  fputcsv($file, $line);
}
flock($file, LOCK_UN);
fclose($file);
?>

</body>
</html>