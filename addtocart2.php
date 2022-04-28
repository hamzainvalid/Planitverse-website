<?php
include('connection.inc.php');
header('Location:addtocart3.php');

$sql = "UPDATE user_products SET order_ref = (SELECT order_reference FROM sale_orderline ORDER BY order_reference DESC LIMIT 1) + 1";
$result = mysqli_query($conn, $sql);

?>