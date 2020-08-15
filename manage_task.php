<?php

require_once 'server.php';
if (!isset($_SESSION['email']) & empty($_SESSION['email'])) {
    header('location: login.php');
}
?>


<section>
    <div>
        <div>
            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th>Task Nmae</th>
                    <th>User</th>
                    <th>Operations</th>
                </tr>
                </thead>

                <tbody>
                <?php
                $sql = "SELECT * FROM tasks";
                $res = mysqli_query($db, $sql);
                while ($r = mysqli_fetch_assoc($res)) {
                    ?>
                    <tr>
                        <th><?php echo $r['id']; ?></th>
                        <td><?php echo $r['task_name']; ?></td>
                        <td><?php echo $r['user_id']; ?></td>
                        <td><a href="delete_task.php?id=<?php echo $r['id']; ?>">Delete</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php include 'inc/footer.php'; ?>

