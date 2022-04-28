<?php
include('connection.inc.php');
header('Location: payment10.php');

$sql = "INSERT INTO invoice (order_ref, amount_total, name, price, qty, vat, address, street, city, fname, lname) SELECT order_reference, total_price, name, price, quantity, VAT, address, street, city, fname, lname FROM sale_orderline WHERE phone = 0;";
$result = mysqli_query($conn, $sql);
?>