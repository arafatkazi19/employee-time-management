<?php

require_once 'server.php';

if(isset($_GET) & !empty($_GET)){
    $id = $_GET['id'];}

$sql = "SELECT * FROM attendance WHERE id=$id";
$res = mysqli_query($db, $sql);


?>

<section id="content">
    <div class="content-blog">
        <div class="container">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Username</th>
                    <th>Clock In</th>
                    <th>Clock Out</th>
                    <th>Total Hours</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>
                <td><?php echo $r['username']; ?></td>
                <td><?php echo $r['clockin']; ?></td>
                <td><?php echo $r['clockout']; ?></td>
                <td><?php echo $r['totalhours']; ?></td>
                </tbody>
            </table>
        </div>
    </div>
</section>
