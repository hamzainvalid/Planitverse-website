<?php
include('connection.inc.php');
header('Location:payment95.php');

$sql = "UPDATE sale_orderline SET street = (SELECT street FROM user_addresses) WHERE phone = 0;";
$result = mysqli_query($conn, $sql);
?>