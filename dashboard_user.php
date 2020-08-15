<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <style>
        .sidenav {
            height: 100%;
            width: 160px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

    </style>
</head>
<body>

<div>
    <h3 style="margin-left: 180px">Dashboard</h3>
    <?php
    $sql = "SELECT * FROM tasks";
    $res = mysqli_query($db, $sql);
    $r = mysqli_fetch_assoc($res);


    $sql = "SELECT * FROM attendance";
    $res = mysqli_query($db, $sql);
    $r = mysqli_fetch_assoc($res)

    ?>
    <div class="sidenav">
        <a href="assigned_task.php?id=<?php echo $r['id']; ?>">Task(s) Assigned</a>
        <a href="attendance.php">Add Attendance</a>
        <a href="attendance_view_user.php?id=<?php echo $r['id']; ?>"">View Attendance</a>
    </div>

    <div style="margin-left: 200px">
        <?php
        if (isset($_SESSION["success"])) { ?>
            <div>
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php } ?>

        <?php
        if (isset($_SESSION['username'])) {?>
            <p>Welcome <?php echo $_SESSION['username'];?></p>
            <p><a href="dashboard_user.php?logout='1'">LOGOUT</a></p>

        <?php	}
        ?>
    </div>

</div>


</body>
</html>


