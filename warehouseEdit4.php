<?php
header('Refresh: 3; URL=http://plantiverse.ezyro.com/warehouseEdit.php');
include('connection.inc.php');


$sku = $_POST['sku'];
$name = $_POST['name'];
$botanical_name = $_POST['botanical_name'];
$price = $_POST['price'];
$thumbnail = $_POST['thumbnail'];
$category = $_POST['category'];
$availability = $_POST['availability'];
$sku2 = $_POST['sku2'];


$sql = "UPDATE products_store SET product_name='$name', product_botanical_name='$botanical_name', product_price='$price', product_thumbnail='$thumbnail', product_category='$category', product_availability='$availability' WHERE SKU = $sku2";
$result = mysqli_query($conn, $sql);


if($result){
    echo "<h1>Product Updated!<br>You will be redirected in 3 seconds.</h1>";
}

