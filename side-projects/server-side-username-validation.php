<?php

$errMsg = "";
$name = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $errMsg = "Error! Username cannot be left blank.";
  } else {
    $name = test_input($_POST["name"]);

    if (preg_match("/^[a-zA-Z0-9]+(-[a-zA-Z0-9]+){0,38}$/",$name)) {
      $errMsg = "Only letters and white space allowed";
      header("Location: success.php");
    } else  {$errMsg = "Error! Username must conform to the following rules:-<br>(i) Begin and end with an alphanumeric character;<br>(ii) Can have hyphens but not consecutive hyphens; and<br>(iii) Between 1 and 39 characters long.";}
  }
  
}


?>

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  



<h2>Github Username Validation</h2>

<p>Please enter your desired user name below:-</p>

<form method="post">  
  User Name: <input type="text" name="name"><br>
  <p class="error"><?php echo $errMsg;?></p>
  <input type="submit" name="submit" value="Submit"> 
</form>

</body>
</html>