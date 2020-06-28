<?php
session_start();



if ( isset($_POST['clear-session']) ) 
  unset ( $_SESSION['email'], $_SESSION['name'], $_SESSION['seatsSTA']);





function sendToSession()
{
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['name'] = $_POST['name']; 
  $_SESSION['seatsSTA'] = $_POST['seatsSTA'];
  echo 'Thank you for order, your input: ' . $_SESSION['name']. $_SESSION['email']. $_SESSION['seatsSTA'];
}

function printPost() {
	echo 'Name: ' . $_POST['name'] . '<br>';
	echo 'Email: ' . $_POST['email'] . '<br>';
}


?>