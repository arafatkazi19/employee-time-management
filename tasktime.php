<?php

require_once 'server.php';

?>

<section>
    <div>
        <div>
            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th>Task</th>
                    <th>Start Time</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT * FROM time";
                $res = mysqli_query($db, $sql);
                while ($r = mysqli_fetch_assoc($res)) {
                ?>
                <tr>
                    <th><?php echo $r['id']; ?></th>
                    <td><?php echo $r['task_name']; ?></td>
                    <td><?php echo $r['starttime']; ?></td>
                    <td><a href="delete_time.php?id=<?php echo $r['id']; ?>">Edit</a></td>
                    <?php } ?>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

