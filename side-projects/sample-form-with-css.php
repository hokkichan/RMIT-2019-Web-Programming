<!DOCTYPE html>
<html>
<style>
  
  form {
  border: 10px grey solid;
  padding: 15px;
  border-radius: 5px;
  }

  div {
    width: 1000px;
    margin-left: auto;
    margin-right: auto;
  }

  h2, label, input {
    margin: 20px;
  }

  input:invalid {
  background-color: pink;
}

</style>

<body>


<div id="container">
<form method="post" action="/register.php">
  <h2>Register</h2>
  <label for="name">Name</label>
  <input type="text" id="name" name="name" placeholder="Enter your name here" required><br><br>
  <label for="email">Email</label>
  <input type="email" id="email" name="email" placeholder="sample@sample.com" required><br><br>
  <label for="password">Password</label>
  <input type="password" id="password" name="password" placeholder="Enter your password here" required><br><br>
  <label for="email">Date of birth</label>
  <input type="date" id="date" name="date" required><br><br>
  <input type="submit" value="Submit">
</form>
</div>

</body>
</html>
