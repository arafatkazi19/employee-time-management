<?php

require_once 'server.php';

if(isset($_GET) & !empty($_GET)){
    $id = $_GET['id'];}

?>


<section>
    <div>
        <div>
            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th>Task Name</th>
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
                    <th scope="row"><?php echo $r['id']; ?></th>
                    <td><?php echo $r['task_name']; ?></td>
                    <td><a href="time_fix.php?id=<?php echo $r['id']; ?>">Time Fix</a></td>
                    <?php } ?>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

