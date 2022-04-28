<?php
header('Location: shipping.php');
include('connection.inc.php');
$sql = "SELECT *  FROM cart, temp_total, sale_order;";
$result = mysqli_multi_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);



if($resultCheck>0){
    while($row = mysqli_fetch_assoc($result)){
        $stmt = $conn->prepare("insert into sale_orderline(order_reference,name,price,quantity, SKU, total_price) values(?,?,?,?,?,?)");
        $stmt-> bind_param("isiiii",$row['order_reference'],$row['name'],$row['price'],$row['quantity'],$row['SKU'],$row['cart_total']);
        $stmt->execute();
        
    }
    $stmt->close();
}