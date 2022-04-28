<?php
include('connection.inc.php');
header('Location:paymentbelal.html');

$email = $_POST['email'];
$phone = $_POST['phone'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$country = $_POST['country'];
$city = $_POST['city'];
$street = $_POST['street'];
$address = $_POST['address'];
$postcode = $_POST['postcode'];


$sql = "INSERT INTO user_addresses (email, phone, fname, lname, country, city, street, address, postcode) values('".$email. "', '".$phone. "', '".$fname. "', '".$lname. "', '".$country. "', '".$city. "', '".$street. "', '".$address. "', '".$postcode. "')";
$result = mysqli_query($conn, $sql);

?>