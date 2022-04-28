<?php
header('Location:admin3.php');
include('connection.inc.php');
$sql = "SELECT * from temp_admin";
$result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result)){
        $stmt = $conn->prepare("insert into products(product_name, botanical_name, description, price, img1_url, img2_url, img3_url) values(?,?,?,?,?,?,?)");
        $stmt-> bind_param("sssdsss",$row['name'],$row['botanical_name'], $row['description'], $row['price'],$row['img1'],$row['img2'],$row['img3']);
        $stmt->execute();
        $stmt->close();
    }
    
