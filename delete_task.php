<?php


if(isset($_GET) & !empty($_GET)){
    $id = $_GET['id'];
    $sql = "DELETE FROM tasks WHERE id='$id'";
    if (mysqli_query($db, $sql) ) {
        header('location:manage_task.php');
    }
}
else {
    header('location: manage_task.php');
}

?>


