<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<body>

<h2>Please Login Here</h2>

<form action="login.php" method="POST">
	<?php include('errors.php'); ?>
  <label for="email">Username :</label><br>
  <input type="text" id="lname" name="username"><br><br>

  <label for="password">Password :</label><br>
  <input type="password" id="passowrd" name="password"><br><br>

  <input type="submit" name="login" value="Submit">
</form> 

<p>Don't have an account  <a href="admin_reg.php">Register Here</a></p>

</body>
</html>

