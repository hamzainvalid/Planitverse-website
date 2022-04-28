<?php
include('connection.inc.php');
header('Location:payment3.php');

$sql = "UPDATE sale_orderline SET email = (SELECT email FROM user_addresses) WHERE phone = 0;";
$result = mysqli_query($conn, $sql);
?>