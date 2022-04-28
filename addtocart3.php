<?php
include('connection.inc.php');
header('Location:addtocart4.php');

$sql = "UPDATE user_products up SET order_qty = (SELECT SUM(qty) as sum FROM user_products where qty is not null);";
$result = mysqli_query($conn, $sql);

?>