<?php
include('connection.inc.php');
header('Location:payment8.php');

$sql = "UPDATE sale_orderline SET city = (SELECT city FROM user_addresses) WHERE phone = 0;";
$result = mysqli_query($conn, $sql);
?>