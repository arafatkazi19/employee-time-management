<?php
include('server.php');
    //Generate Password and Username

    $password_this = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()";
    $gen_pass = substr(str_shuffle($password_this),0,8);

    $username_this = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $gen_username = substr(str_shuffle($username_this),0,8);

    if (isset($_POST['register_user'])){
        $fullname = mysqli_real_escape_string($db,$_POST['fullname']);
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password = mysqli_real_escape_string($db,$_POST['password']);

        $sql = $db->query( "INSERT INTO users (fullname,username,email,password) VALUES('$fullname','$username','$email','$password')");

        /////sending mail
        $to = $email;
        $subject = "Username Password";
        $messgae = "Hello!". $fullname.",". "\n" ."Your username is :" .$username. "." ."\n" . "Your Password is: " .$password. "\n";
        $headers = "From: ".$email;

        if (mail($to,$subject,$messgae,$headers)){
            header('location:dashboard');
        }


    }


 ?>
<!DOCTYPE html>
<html>
<body>

<h2>Register Here</h2>

<form action="" method="POST">

  <label for="name">Full Name:</label><br>
  <input type="text" id="fname" name="fullname"><br><br>
	
  <label for="name">Username:</label><br>
  <input type="text" id="fname" name="username" value="<?php echo $gen_username?>"><br><br>


  <label for="email">Email :</label><br>
  <input type="text" id="lname" name="email"><br><br>

  <label for="password">Password :</label><br>
  <input type="text" id="passowrd" name="password" value="<?php echo $gen_pass?>"><br><br>
  <input type="submit" name="pass_gen" value="Generate">


  <hr>

  <input type="submit" name="register_user" value="Submit">
</form> 


</body>
</html>
