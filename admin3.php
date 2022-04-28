<?php
header('Location:admin4.php');
include('connection.inc.php');
$sql = "SELECT * from temp_admin";
$result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result)){
        $stmt = $conn->prepare("insert into products_store(product_name, product_botanical_name, product_price, product_thumbnail, product_category, product_availability) values(?,?,?,?,?,?)");
        $stmt-> bind_param("ssdssi",$row['name'],$row['botanical_name'], $row['price'], $row['thumbnail'],$row['category'],$row['availability']);
        $stmt->execute();
        $stmt->close();
    }