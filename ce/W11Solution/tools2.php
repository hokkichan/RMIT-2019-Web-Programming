<?php
session_start();

if ( isset($_POST['clear-session']) ) 
  unset ( $_SESSION['email'], $_SESSION['name'], $_SESSION['seatsSTA']);



function printPost() {
	echo 'Name: ' . $_POST['name'] . '<br>';
	echo 'Email: ' . $_POST['email'] . '<br>';
	echo 'Seats STA: ' . $_POST['seatsSTA'] . '<br>';
}

function sendToSession()
{
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['seatsSTA'] = $_POST['seatsSTA'];
  echo 'Thank you for order, your input: ' . $_SESSION['email'] . $_SESSION['name']. $_SESSION['seatsSTA'];
}


?>