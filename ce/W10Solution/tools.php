<?php
session_start();

$myPizza = [

  'option_1'=> 
  [
  'size' => 'large',
  'base' => 'thin' ,
  'type' => 'capricciosa',
  'extras' => [
    'cheese' => 'triple',
    'anchovies' => true,
    'pineapple' => true
   ],
  'price' => 22.50
  ]
];

function printPizza() {
global $myPizza;
echo $myPizza ['option_1']['base'] . '<br>';
echo $myPizza ['option_1']['extras']['cheese'] . '<br>';

foreach ( $myPizza as $key => $pizza ){
  //foreach( $pizza as $ key2 => value)
  echo "$key: $pizza<br>" ; 
}

echo '<pre>' . print_r ($myPizza, true) . '</pre>';
}

function checkName() {
$name = "";
$nameErr= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
}


function printIndexedArray() {

  $numbers = ['zero', 'one', 'two', 'three', 'four'];
  
  $length = count($numbers);
  for ($i=0; $i<$length; $i++) {
  	echo $numbers[$i] . "<br>\n";
  }
  }
function printAssociativeArray() {
  
  $letters = array( 'zero'=>'A', 'one'=>'B', 'two'=>'C', 'three'=>'D', 'four'=>'E' );
  foreach ( $letters as $key => $letter )
  echo "$key: $letter<br>" ; 
  }

function printPost() {
	echo 'Name: ' . $_POST['name'] . '<br>';
	echo 'Email: ' . $_POST['email'] . '<br>';
}
}
?>