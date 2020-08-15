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
	<div class="sidenav">
  <a href="user_reg.php">User Registration</a>
  <a href="add_task.php">Add Task</a>
  <a href="manage_task.php">Manage Task</a>
  <a href="tasktime.php">Task Time</a>
        <a href="manage_attendance.php">Task Time</a>

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
			<p><a href="dashboard.php?logout='1'">LOGOUT</a></p>

		<?php	}
		?>
	</div>

</div>


</body>
</html>

