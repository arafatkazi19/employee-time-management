<?php

include('server.php');
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);


    if (count($errors)==0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db,$query);
        if (mysqli_num_rows($result)==1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in!";

            header('location: dashboard_user.php');
        }

    }


    //logout
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}

}


?>
<!DOCTYPE html>
<html>
<head>
    <style>
        .hidea{
            display: none;
        }
    </style>
</head>
<body>

<h2>Please Login Here</h2>

<form action="change_password.php" method="POST">

    <label for="email">Username :</label><br>
    <input type="text" id="lname" name="username"><br><br>

    <label for="password">Password :</label><br>
    <input type="password" id="passowrd" name="password"><br><br>

    <?php
    $sql = "SELECT * FROM users";
    $res = mysqli_query($db, $sql);
    $r = mysqli_fetch_row($res)
    ?>

    <a class="hidea" href="change_password.php?id=<?php echo $r['id']; ?>"></a>

    <input type="submit" name="login_user" value="Submit">
</form>

<p>Don't have an account  <a href="admin_reg.php">Register Here</a></p>

</body>
</html>
