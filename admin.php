<?php

include("connection.inc.php");
header('Location:admin2.php');

$product_name = $_POST['product_name'];
$botanical_name = $_POST['product_botanical_name'];
$description = $_POST['product_description'];
$price = $_POST['product_price'];
$price_level = $_POST['product_price_level'];
$thumbnail = $_POST['product_thumbnail'];
$img1 = $_POST['product_img1'];
$img2 = $_POST['product_img2'];
$img3 = $_POST['product_img3'];
$category = $_POST['product_category'];

$availability = $_POST['product_availability'];
$stock_qty = $_POST['product_quantity'];
$pot_stock_qty = $_POST['pot_quantity'];

$variation_size = $_POST['variation_size'];
$variation_pot_material = $_POST['variation_pot_material'];
$variation_pot_color = $_POST['variation_pot_color'];

if($conn){
    $stmt = $conn->prepare("insert into temp_admin(name, botanical_name, description, price, price_level, thumbnail, img1, img2, img3, category, availability, stock_qty, pot_stock_qty, variation_size, variation_pot_material, variation_pot_color) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt-> bind_param("sssdisssssiiisss", $product_name, $botanical_name, $description, $price, $price_level, $thumbnail, $img1, $img2, $img3, $category, $availability, $stock_qty, $pot_stock_qty, $variation_size, $variation_pot_material, $variation_pot_color);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
else{
    echo '<h1>connection failed</h1>';
}
?>