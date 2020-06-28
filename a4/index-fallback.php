<?php //session_start();
 include 'tools.php';
$errorsFound = 0;

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (($_POST["seatsSTA"])>9) {
    $seatsErr = "Error! Max ticket order is 9 per type.";
  } 
}

if ($errorsFound >0) {
echo 'Number of errors found: ' . $errorsFound . '<br>';
}
else{
  if (!empty($_POST))
  {
    sendToSession();
    printPost();
    header("Location: receipt.php");
  }
}

 ?>
<!DOCTYPE html>
<html lang='en'>

  <head>
    <meta charset='utf-8'>
    <title>A4 Backup Page</title>
    <style>label { display: inline-block; width:90px; }</style>
  </head>

  <body>
    
    <header>
      <h1>🌕 Lunardo Cinema</h1>
    </header>

    <nav>
    </nav>

    <main>
      <h2>A4 Booking Form</h2>
      <form method='post' action='index-fallback.php'>


        <label>MovieId</label><input type=text name='movieId'/><br>
        <label>MovieDay</label><input type=text name='movieDay'/><br>
        <label>MovieHour</label><input type=text name='movieHour'/><br>
        <br>
        <label>SeatsSTA</label><input type=text name='seatsSTA'/><br>
        <label>SeatsSTP</label><input type=text name='seatsSTP'/><br>
        <label>SeatsSTC</label><input type=text name='seatsSTC'/><br>
        <label>SeatsFCA</label><input type=text name='seatsFCA'/><br>
        <label>SeatsFCP</label><input type=text name='seatsFCP'/><br>
        <label>SeatsFCC</label><input type=text name='seatsFCC'/><br>
        <br>
        <label>CustName</label><input type=text name='name'/><br>
        <label>CustEmail</label><input type=text name='email'/><br>
        <label>CustMobile</label><input type=text name='mobile'/><br>
        <label>CustCard</label><input type=text name='cust[card]'/><br>
        <label>CustExpiry</label><input type=text name='cust[expiry]'/><br>
        <input type=submit value='Book'/>
        <input type="submit" value="Clear Session" name="clear-session"><br>

      </form>

    </main>

    <footer>
    </footer>
    
  </body>
</html>


