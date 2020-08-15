<?php
session_start();
$username="";
$email="";
$errors=array();

$db = mysqli_connect('localhost','root','','emp_db');

if (isset($_POST['register'])) {
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$password = mysqli_real_escape_string($db,$_POST['password']);

	if (empty($username)) {
		array_push($errors, "Username is required");
	}
		if (empty($email)) {
		array_push($errors, "Email is required");
	}
		if (empty($password)) {
		array_push($errors, "Passowrd is required");
	}

	if (count($errors)==0) {
		$password = md5($password);

		$sql = "INSERT INTO admin (username,email,password) VALUES('$username','$email','$password')";

		mysqli_query($db,$sql);

		// $_SESSION['username'] = $username;
		// $_SESSION['success'] = "You are now logged in!";
		// header('location: dashboard.php'); 
	}

}

//login
if (isset($_POST['login'])) {
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$password = mysqli_real_escape_string($db,$_POST['password']);

	if (empty($username)) {
		array_push($errors, "Username is required");
	}
		if (empty($password)) {
		array_push($errors, "Password is required");
	}

		if (count($errors)==0) {
		$password = md5($password);
		$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db,$query);
		if (mysqli_num_rows($result)==1) {
			$_SESSION['username'] = $username;
			 $_SESSION['success'] = "You are now logged in!";

			header('location: dashboard.php');
		}else{
			array_push($errors,"Wrong Credintial(s)");
			
		}
	}
}


//logout
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header('location: login.php');
}

?>