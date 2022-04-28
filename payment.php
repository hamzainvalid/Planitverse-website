<?php
include('connection.inc.php');
header('Location:payment2.php');

$sql = "INSERT INTO sale_orderline (order_reference, name, price, quantity, order_qty, SKU, total_price, VAT, total_revenue) SELECT order_ref, name, price, qty, order_qty, sku, total_price, vat, cart_total FROM user_products;";
$result = mysqli_query($conn, $sql);

?>