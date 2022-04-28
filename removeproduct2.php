<?php
include('connection.inc.php');
header('Location:cart.php');

$sql = "UPDATE user_products up SET cart_total = (SELECT SUM(total_price) as sum FROM user_products where qty is not null);";
$result = mysqli_query($conn, $sql);

?>