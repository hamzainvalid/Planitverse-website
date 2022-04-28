<?php
include('connection.inc.php');
header('Location: checkout.html', "_self");

$cart_total = $_POST['cart_total'];

$stmt = $conn->prepare("insert into temp_total(cart_total) values(?)");
$stmt-> bind_param("i",$cart_total);
$stmt->execute();
$stmt->close();
$conn->close();