<?php
include('connection.inc.php');
header('Location:payment12.php');

$sql = "TRUNCATE TABLE user_products;";
$result = mysqli_query($conn, $sql);
?>
