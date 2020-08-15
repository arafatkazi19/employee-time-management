<?php
session_start();
require_once 'server.php';
if (!isset($_SESSION['email']) & empty($_SESSION['email'])) {
    header('location: login.php');
}
if(isset($_POST['submit_atten'])){
    $name = mysqli_real_escape_string($db, $_POST['username']);
    $clockin = mysqli_real_escape_string($db, $_POST['clockin']);
    $clockout = mysqli_real_escape_string($db, $_POST['clcokout']);
    $totalhours = mysqli_real_escape_string($db, $_POST['totalhours']);

    $sql = "INSERT INTO attendance (username,clcckin,clockout,totalhours) VALUES('$name','$clockin','$clockout','$totalhours')";
    $res = mysqli_query($db, $sql);


}

?>

<section>
    <div>
        <div>
            <form method="post">
                <div>

                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Username" ">

                    <label for="clockin">Clock In</label>
                    <input type="datetime-local" name="clockin" id="start-time">


                    <label for="clockout">Clock Out</label>
                    <input type="datetime-local" name="clcokout" id="end-time">

                    <label for="total-hours">Total Hours</label>
                    <input type="text" name="totalhours" id="total-hours" placeholder="Total Hours">


                </div>
                <button type="submit" name="submit_atten">Submit</button>
            </form>

        </div>
    </div>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
    document.querySelector("#end-time").addEventListener("change", myFunction);

    function myFunction() {

        var start = Date.parse($("input#start-time").val());
        var end = Date.parse($("input#end-time").val()); //get timestamp

        var totalHours = NaN;
        if (start < end) {
            totalHours = Math.floor((end - start) / 1000 / 60 / 60); //milliseconds: /1000 / 60 / 60
        }

        $("#total-hours").val(totalHours);

    }
</script>






