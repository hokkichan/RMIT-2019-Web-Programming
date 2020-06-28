<?php
session_start();
$_SESSION['name'] = $_GET['name'];
$_SESSION['email'] = $_GET['email'];
// Put your PHP functions and modules here

function printTable() {

  for ( $i=1; $i<=12; $i++ ) // rows
  {
    echo "<tr>";
    for ( $j=1; $j<=12; $j++ ) // cells
    {
      echo "<td>".$i*$j."</td>";
    }
    echo "</tr>";
  }
}

function printCompare() {
	$a = 5;
	$b = 5.0;
	
echo ($a == $b ? 'correct' :'incorrect') . "<br>";
echo ($a === $b ? 'correct' :'incorrect') . "<br>";
echo ($a = $b ? 'correct' :'incorrect'); 
}

function preShow( $arr, $returnAsString=false ) {
$ret = '<pre>' . print_r($arr, true) . '</pre>';

echo $_GET['name'];//sample from Sama
if ($returnAsString)
return $ret;
else
echo $ret;
}

function printMyCode() {
$lines = file($_SERVER['SCRIPT_FILENAME']);
echo "<pre id='mycode'><ol>";
foreach ($lines as $line)
echo '<li>'.rtrim(htmlentities($line)).'</li>';
echo '</ol></pre>';
}

function isFullOrDiscount( $day, $hour ) {
if ( $day == 'Monday' || $day == 'Tuesday' || $hour == '6pm')
return 'discount';
else if ($day == 'Wed' || $day == 'Sunday')
return 'full';
else return 'invalid';
}



?>