<?php


if(isset($_GET) & !empty($_GET)){
    $id = $_GET['id'];
    $sql = "DELETE FROM attendance WHERE id='$id'";
    if (mysqli_query($db, $sql) ) {
        header('location:manage_attendance.php');
    }
}
else {
    header('location: manage_attendance.php');
}

?>



