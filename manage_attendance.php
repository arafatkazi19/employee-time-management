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
                    <th>Username</th>
                    <th>Clock In</th>
                    <th>Clock Out</th>
                    <th>Total Hours</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT * FROM attendance";
                $res = mysqli_query($db, $sql);
                while ($r = mysqli_fetch_assoc($res)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $r['id']; ?></th>
                    <td><?php echo $r['username']; ?></td>
                    <td><?php echo $r['clockin']; ?></td>
                    <td><?php echo $r['clockout']; ?></td>
                    <td><?php echo $r['totalhours']; ?></td>
                    <td> <a href="delattendance.php?id=<?php echo $r['id']; ?>">Delete</a></td>
                    <?php } ?>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>


