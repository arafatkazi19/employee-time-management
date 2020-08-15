<?php

require_once 'server.php';


if(isset($_GET) & !empty($_GET)){
    $id = $_GET['id'];}



if(isset($_POST['submit_time'])){
    $name = mysqli_real_escape_string($db, $_POST['task_name']);
    $starttime = mysqli_real_escape_string($db, $_POST['starttime']);
    $endtime = mysqli_real_escape_string($db, $_POST['endtime']);
    $sql = "INSERT INTO time (task_name,start_time,end_time) VALUES('$name','$starttime','$endtime')";
    $res = mysqli_query($db, $sql);



}

?>




<section>
    <div>
        <div>
            <form method="post">
                <div>

                    <?php
                    $sql = "SELECT * FROM tasks WHERE id=$id";
                    $res = mysqli_query($db, $sql);
                    $r = mysqli_fetch_assoc($res) ;
                    ?>
                    <label for="taskname">Task Name</label>
                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                    <input type="text" name="task_name"  value="<?php echo $r['task_name'] ?>">

                    <label for="starttime">Start Time</label>
                    <input type="datetime-local" name="starttime">


                    <label for="endtime">End Time</label>
                    <input type="datetime-local" name="endtime">


                </div>
                <button type="submit" name="submit_time">Submit</button>
            </form>

        </div>
    </div>
</section>


