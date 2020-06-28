<!DOCTYPE html>
<html>

<style>
	#demoHere4 {
		margin-left: 10px;
	}

	#cardNumber {
		padding: 10px;
		width: 300px;
		border-radius: 5px;
    margin-bottom: 15px;
	}

	#cardNumber::placeholder {
		font-size: 120%;
	}

	#expiryDate {
		padding: 5px;
		margin-bottom: 15px;
		border-radius: 5px;
		width: 300px;
	}

	#expiryDate::placeholder {
		font-size: 120%;
	}

	h2, div, form {
		text-align: center;
	}

</style>

<script>
var d = new Date();
var currentYear = d.getFullYear();
var expiryYear = (d.getFullYear() + 6);
var currentMonth = (d.getMonth()+1);
var counter = 0;

function myFunction() {
  document.getElementById("printMonth").innerHTML = currentMonth;
  document.getElementById("printMonth2").innerHTML = currentMonth;
  document.getElementById("printYear").innerHTML = currentYear;
  document.getElementById("printExpiryYear").innerHTML = expiryYear;
}

function checkYear() {
  var x = document.getElementById("expiryDate").value;
  var userDate = new Date(x);
  var userMonth = (userDate.getMonth()+1);
  var userYear = userDate.getFullYear();
  //document.getElementById("demoHere3").innerHTML = x;
  //document.getElementById("demoHere").innerHTML = userYear;
 // document.getElementById("demoHere2").innerHTML = userMonth;

  if (userYear<currentYear || userYear>expiryYear) {
  	document.getElementById("expiryDate").style.border = "3px solid red";
  	document.getElementById("alert").innerHTML = "Error! Please enter a valid date!";
  	document.getElementById("alert").style.color = "red";
  	counter=1;
  }  else if (userYear == currentYear && userMonth<currentMonth) {
  	document.getElementById("expiryDate").style.border = "3px solid red";
  	document.getElementById("alert").innerHTML = "Error! Please enter a valid date!";
  	document.getElementById("alert").style.color = "red";
  	counter=1;
  }  else if (userYear == currentYear && userMonth>=currentMonth) {
  	document.getElementById("expiryDate").style.border = "3px solid green";
  	document.getElementById("alert").innerHTML = "Validation successful!";
  	document.getElementById("alert").style.color = "green";
  	counter=0;
  } else if (userYear == expiryYear && userMonth>currentMonth) {
  	document.getElementById("expiryDate").style.border = "3px solid red";
  	document.getElementById("alert").innerHTML = "Error! Please enter a valid date!";
  	document.getElementById("alert").style.color = "red";
  	counter=1;
  } else if (userYear == expiryYear && userMonth<=currentMonth) {
  	document.getElementById("expiryDate").style.border = "3px solid green";
  	document.getElementById("alert").innerHTML = "Validation successful!";
  	document.getElementById("alert").style.color = "green";
  	counter=0;
  } else {
  	document.getElementById("expiryDate").style.border = "3px solid green";
  	document.getElementById("alert").innerHTML = "Validation successful!";
  	document.getElementById("alert").style.color = "green";
  	counter=0;
  }
}

function validate() {
	if (counter == 0) {
		return true
	} else {
		return false
	}
}

</script>

<body onload="myFunction()">




<h2>Submit Credit Card Details</h2>




<form method = "post" action="register.php" onsubmit="return validate();">
  <label for="cardNumber">Card Number</label><br>
  <input type="number" id="cardNumber" name="cardNumber" placeholder="---- ---- ---- ----" required><br>
  <label for="expiryDate">Expiry Date</label><br>
  <input type="month" id="expiryDate" name="expiryDate" placeholder="--/--" required onChange=checkYear()><br><label id="alert"></label><br><div id="notice">Credit card expiry dates must be between 
  <label id="printMonth"></label>/<label id="printYear"></label> and 
  <label id="printMonth2"></label>/<label id="printExpiryYear"></label></div><br>
  <input type="submit" value="Submit">
</form>





</body>
</html>
