<?php


if(isset($_GET) & !empty($_GET)){
    $id = $_GET['id'];
    $sql = "DELETE FROM time WHERE id='$id'";
    if (mysqli_query($db, $sql) ) {
        header('location:tasktime.php');
    }
}
else {
    header('location: tasktime.php');
}

?>


