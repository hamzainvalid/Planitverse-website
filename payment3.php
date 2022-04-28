<?php
include('connection.inc.php');
header('Location:payment4.php');

$sql = "UPDATE sale_orderline SET postcode = (SELECT postcode FROM user_addresses) WHERE phone = 0;";
$result = mysqli_query($conn, $sql);
?>
