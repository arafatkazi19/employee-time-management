<?php

require_once 'server.php';
if (!isset($_SESSION['email']) & empty($_SESSION['email'])) {
    header('location: login.php');
}
if(isset($_POST) & !empty($_POST)){
    $name = mysqli_real_escape_string($db, $_POST['task_name']);
    $user = mysqli_real_escape_string($db, $_POST['user']);

    $sql = "INSERT INTO tasks (name,user_id) VALUES('$name','$user')";
    $res = mysqli_query($db, $sql);



}

?>




<section>
    <div>
        <div>
            <form method="post">
                <div class="form-group">
                    <label for="taskname">Task Name</label>
                    <input type="text" name="task_name" placeholder="Task Name">
                </div>
                <div class="form-group">
                    <label for="user">User</label>
                    <select name="user">
                        <option value="">----SELECT USER"----</option>
                        <?php
                        $sql = "SELECT * FROM tasks";
                        $res = mysqli_query($db, $sql);
                        while ($r = mysqli_fetch_assoc($res)) {
                            ?>
                            <option value="<?php echo $r['id']; ?>"><?php echo $r['username']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

        </div>
    </div>
</section>




