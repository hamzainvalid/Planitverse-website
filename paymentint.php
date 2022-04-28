<?php
include('connection.inc.php');

$sql = "INSERT INTO sale_orderline (order_reference, name, price, quantity, SKU, total_price, VAT) SELECT order_ref, name, price, qty, sku, total_price, vat FROM user_products;";
$result = mysqli_query($conn, $sql);
?>