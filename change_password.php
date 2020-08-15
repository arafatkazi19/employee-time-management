<?php
include('server.php');

if(isset($_GET) & !empty($_GET)){
    $id = $_GET['id'];}

if(isset($_POST) & !empty($_POST)){
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "UPDATE users SET password='$password' WHERE id='$id'";
    $res = mysqli_query($db, $sql);

    if ($res){
        header('location:dashboard_user.php');
    }

}


?>
<!DOCTYPE html>
<html>
<body>

<h2>Change Your Password Here</h2>

<form method="POST">


    <div class="form-group">
        <label for="password">Password</label>
        <?php

        $sql = "SELECT * FROM users WHERE id=$id";
        $res = mysqli_query($db, $sql);
        $r = mysqli_fetch_assoc($res) ;
        ?>
        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
        <input type="text" name="password" value="<?php echo $r['password'] ?>">
    </div>

    <input type="submit" value="Submit">
</form>



</body>
</html>

