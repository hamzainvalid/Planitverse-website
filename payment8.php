<?php
include('connection.inc.php');
header('Location:payment9.php');

$sql = "UPDATE sale_orderline SET address = (SELECT address FROM user_addresses) WHERE phone = 0;";
$result = mysqli_query($conn, $sql);
?>