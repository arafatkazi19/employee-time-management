<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<body>

<h2>Register Here</h2>

<form action="admin_reg.php" method="POST">
	<?php include('errors.php') ?>
  <label for="name">Username:</label><br>
  <input type="text" id="fname" name="username" value="<?php echo $username?>"><br><br>

  <label for="email">Email :</label><br>
  <input type="text" id="lname" name="email" value="<?php echo $email?>"><br><br>

  <label for="password">Password :</label><br>
  <input type="password" id="passowrd" name="password"><br><br>

  <input type="submit" name="register" value="Submit">
</form> 

<p>Already registered <a href="login.php">Login Here</a></p>

</body>
</html>

