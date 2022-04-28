<?php
include('connection.inc.php');
header('Location:payment5.php');

$sql = "UPDATE sale_orderline SET fname = (SELECT fname FROM user_addresses) WHERE phone = 0;";
$result = mysqli_query($conn, $sql);
?>