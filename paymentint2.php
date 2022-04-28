<?php
include('connection.inc.php');

$sql = "INSERT INTO sale_orderline (email, phone, fname, lname, country, city, address, street, postcode) SELECT email, phone, fname, lname, country, city, address, street, postcode FROM user_addresses WHERE sale_orderline.phone = 0;";
$result = mysqli_query($conn, $sql);
?>