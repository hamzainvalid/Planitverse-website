<?php
include('connection.inc.php');
header('Location: invoice3.php');

$sql = "SELECT *  FROM customer ORDER BY customer_id DESC LIMIT 1, sale_order ORDER BY order_reference DESC LIMIT 1;";
$result = mysqli_multi_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);



if($resultCheck>0){
    while($row = mysqli_fetch_assoc($result)){
        $stmt = $conn->prepare("insert into invoice(customer_id,sale_order_id,created_at,amount_total) values(?,?,?,?)");
        $stmt-> bind_param("iiii",$row['customer_id'],$row['order_reference'],$row['creation_date'],$row['cart_total']);
        $stmt->execute();
        
    }
    $stmt->close();
}