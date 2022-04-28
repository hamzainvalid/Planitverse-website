<?php
include('connection.inc.php');
header('Location: final2.php');



$fName = $_POST['fName'];
$lName = $_POST['lName'];
$email = $_POST['email'];
$cart_total = $_POST['cart_total'];

$stmt = $conn->prepare("insert into sale_order(fName,lName,email,cart_total) values(?,?,?,?)");
$stmt-> bind_param("sssi",$fName,$lName,$email,$cart_total);
$stmt->execute();
$stmt->close();



