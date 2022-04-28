<?php
include('connection.inc.php');
header('Location:payment6.php');

$sql = "UPDATE sale_orderline SET lname = (SELECT lname FROM user_addresses) WHERE phone = 0;";
$result = mysqli_query($conn, $sql);
?>