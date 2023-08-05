<?php
$conn = mysqli_connect("localhost","","","smart");

$query = "SELECT direction FROM remote_controls ORDER BY timestamp DESC LIMIT 1"; // select the latest chareacter
$query_run = mysqli_query($conn,$query); //retrive form the database
if(mysqli_num_rows($query_run) > 0){
    foreach($query_run as $row){
        ?>
        <p><?= $row['direction']; ?></p>
        <?php
    }
}

?>
