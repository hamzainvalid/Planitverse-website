<?php
include('connection.inc.php');
header('Location:invoice.php');

$sql = "TRUNCATE TABLE user_addresses;";
$result = mysqli_query($conn, $sql);
?>
