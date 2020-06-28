<?php 
include 'tools.php';

$sta = $_SESSION['seatsSTA']; 
$stp = $_SESSION['seatsSTP'];  
$stc = $_SESSION['seatsSTC']; 
$fca = $_SESSION['seatsFCA']; 
$fcp = $_SESSION['seatsFCP'];
$fcc = $_SESSION['seatsFCC'];
$day = $_SESSION['movieDay'];
$hour = $_SESSION['movieHour'];

$total =0;

if ($day == "Monday"|| $day == "Tuesday") {
  $total += 15*$sta;
  $total += 13*$stp;
  $total += 11*$stc;
  $total += 25*$fca;
  $total += 23*$fcp;
  $total += 21*$fcc;
  }
  else if (($day == "Wednesday" || $day == "Thursday" || $day == "Friday") && ($hour == "12pm")) {
  $total += 15*$sta;
  $total += 13*$stp;
  $total += 11*$stc;
  $total += 25*$fca;
  $total += 23*$fcp;
  $total += 21*$fcc;
  }
  else {
  $total += 20.5*$sta;
  $total += 18*$stp;
  $total += 15.5*$stc;
  $total += 30*$fca;
  $total += 27.5*$fcp;
  $total += 25*$fcc;
  }

$tax = $total/11;
$totalBeforeTax = $total*10/11;

	;?>

<style>
* {
  font-family: 'Roboto', sans-serif;
}

h1 {
  font-weight: bold;
  text-align: center;
  width: 80%;
}

h2 {
  color: blue;
  font-weight: bold;
  width: 80%;
}


table {
  border-collapse: collapse;
  width: 80%;
  margin-bottom: 25px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 5px;
}

tr:nth-child(even) {
  background-color: grey;
}
</style>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Order completed</title>
	
</head>

<body>
<h3>
  Lunardo Cinema <br>
  Email: info@lunardo.com <br>
  Tel: +61 3 9925 5110 <br>
  Address: La Trobe St, Melbourne <br>
</h3>

<h1>Receipt</h1>

<table>
    <h2>Customer Details</h2>
    <tr>
        <td> </td>
        <th scope="col" class="title">Details</th>
    </tr>
    <tr>
        <th scope="row">Name</th>
        <td><?php echo $_SESSION['name'] ?></td>
    </tr>
    <tr>
        <th scope="row">Email</th>
        <td><?php echo $_SESSION['email'] ?></td>
    </tr>
    <tr>
        <th scope="row">Mobile</th>
        <td><?php echo $_SESSION['mobile'] ?></td>
    </tr>
</table>
<table>
    <h2>Booking Details</h2>
    <tr>
        <td> </td>
        <th scope="col" class="title">Remarks</th>
        <th scope="col" class="title">Details/Quantity</th>
    </tr>
     <tr>
        <th scope="row">Movie Code: </th>
        <td>ACT = Star Wars: The Rise of Skywalker [M]<br>ANM = Frozen 2 [PG]<br>RMC = The Aeronauts [PG]<br>AHF = Jojo Rabbit [M]</td>
        <td><?php echo $_SESSION['movieId'] ?></td>
    </tr>
    <tr>
        <th scope="row">Movie Day</th>
        <td></td>
        <td><?php echo $_SESSION['movieDay'] ?></td>
    </tr>
    <tr>
        <th scope="row">Movie Hour</th>
        <td></td>
        <td><?php echo $_SESSION['movieHour'] ?></td>
    </tr>
    <tr>
        <th scope="row">Standard Adult (STA)</th>
        <td></td>
        <td><?php echo $_SESSION['seatsSTA'] ?></td>
    </tr>
    <tr>
        <th scope="row">Standard Concession (STP)</th>
        <td></td>
        <td><?php echo $_SESSION['seatsSTP'] ?></td>
    </tr>
   <tr>
        <th scope="row">Standard Child (STC)</th>
        <td></td>
        <td><?php echo $_SESSION['seatsSTC'] ?></td>
    </tr>
    <tr>
        <th scope="row">First Class Adult (FCA)</th>
        <td></td>
        <td><?php echo $_SESSION['seatsFCA'] ?></td>
    </tr>
    <tr>
        <th scope="row">First Class Concession (FCP)</th>
        <td></td>
        <td><?php echo $_SESSION['seatsFCP'] ?></td>
    </tr>
    <tr>
        <th scope="row">First Class Child (FCC)</th>
        <td></td>
        <td><?php echo $_SESSION['seatsFCC'] ?></td>
    </tr>
</table>
<h3>
	Total: $ <?php echo round($totalBeforeTax, 2)?><br>
  GST (10%): $ <?php echo round($tax, 2)?><br>
  Grand Total: $ <?php echo round($total, 2)?><br>
</h3>
<h3>
Thank you for your order!
</h3>

<span>============================Tear off for ticket(s) below============================</span>

<table>
    <h1>Ticket(s)</h1>
    <tr>
        <td> </td>
        <th scope="col" class="title">Remarks</th>
        <th scope="col" class="title">Details/Quantity</th>
    </tr>
    <tr>
        <th scope="row">Customer Name</th>
        <td></td>
        <td><?php echo $_SESSION['name'] ?></td>
    </tr>
     <tr>
        <th scope="row">Movie Code: </th>
        <td>ACT = Star Wars: The Rise of Skywalker [M]<br>ANM = Frozen 2 [PG]<br>RMC = The Aeronauts [PG]<br>AHF = Jojo Rabbit [M]</td>
        <td><?php echo $_SESSION['movieId'] ?></td>
    </tr>
    <tr>
        <th scope="row">Movie Day</th>
        <td></td>
        <td><?php echo $_SESSION['movieDay'] ?></td>
    </tr>
    <tr>
        <th scope="row">Movie Hour</th>
        <td></td>
        <td><?php echo $_SESSION['movieHour'] ?></td>
    </tr>
    <tr>
        <th scope="row">Standard Adult (STA)</th>
        <td></td>
        <td><?php echo $_SESSION['seatsSTA'] ?></td>
    </tr>
    <tr>
        <th scope="row">Standard Concession (STP)</th>
        <td></td>
        <td><?php echo $_SESSION['seatsSTP'] ?></td>
    </tr>
   <tr>
        <th scope="row">Standard Child (STC)</th>
        <td></td>
        <td><?php echo $_SESSION['seatsSTC'] ?></td>
    </tr>
    <tr>
        <th scope="row">First Class Adult (FCA)</th>
        <td></td>
        <td><?php echo $_SESSION['seatsFCA'] ?></td>
    </tr>
    <tr>
        <th scope="row">First Class Concession (FCP)</th>
        <td></td>
        <td><?php echo $_SESSION['seatsFCP'] ?></td>
    </tr>
    <tr>
        <th scope="row">First Class Child (FCC)</th>
        <td></td>
        <td><?php echo $_SESSION['seatsFCC'] ?></td>
    </tr>
</table>



<?php
$varName =  ($_SESSION['name']);
$varEmail =  ($_SESSION['email']);
$varMobile =  ($_SESSION['mobile']);
$varMovieId =  ($_SESSION['movieId']);
$varMovieDay =  ($_SESSION['movieDay']);
$varMovieHour =  ($_SESSION['movieHour']);
$seatsSTA =  ($_SESSION['seatsSTA']);
$seatsSTP =  ($_SESSION['seatsSTP']);
$seatsSTC =  ($_SESSION['seatsSTC']);
$seatsFCA =  ($_SESSION['seatsFCA']);
$seatsFCP =  ($_SESSION['seatsFCP']);
$seatsFCC =  ($_SESSION['seatsFCC']);


$list = array (
  array("Name", "$varName"),
  array("Email", "$varEmail"),
  array("Mobile", "$varMobile"),
  array("Movie ID", "$varMovieId"),
  array("Day", "$varMovieDay"),
  array("Hour", "$varMovieHour"),
  array("STA Qty", "$seatsSTA"),
  array("STP Qty", "$seatsSTP"),
  array("STC Qty", "$seatsSTC"),
  array("FCA Qty", "$seatsFCA"),
  array("FCP Qty", "$seatsFCP"),
  array("FCC Qty", "$seatsFCC"),
  array("Total", "$total"),
);


$file = fopen("bookings.txt","a");
//flock($file, LOCK_SH);
foreach ($list as $line) {
  fputcsv($file, $line);
}
//flock($file, LOCK_UN);
fclose($file);
?>

</body>
</html>