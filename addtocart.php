<?php
include('connection.inc.php');
header('Location:addtocart2.php');

$name = $_POST['name'];
$qty = $_POST['qty'];
$sku = $_POST['sku'];
$price = $_POST['price'];
$total_price = $price*$qty;
$vat = $total_price*0.2;

$sql = "INSERT INTO user_products (name, price, qty, sku, total_price, vat) values('".$name. "', '".$price. "', '".$qty. "', '".$sku. "', '".$total_price. "', '".$vat. "')";
$result = mysqli_query($conn, $sql);

?>