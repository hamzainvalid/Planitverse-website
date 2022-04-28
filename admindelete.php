<?php
include('connection.inc.php');
$sql = "TRUNCATE TABLE temp_admin";
$result = mysqli_query($conn, $sql);

    echo "<html> <h1>Your product has been successfully added!</h1> </html>";