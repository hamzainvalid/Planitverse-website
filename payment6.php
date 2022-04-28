<?php
include('connection.inc.php');
header('Location:payment7.php');

$sql = "UPDATE sale_orderline SET country = (SELECT country FROM user_addresses) WHERE phone = 0;";
$result = mysqli_query($conn, $sql);
?>