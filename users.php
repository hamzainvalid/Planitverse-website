<?php
header('Location: final2.php');
include('connection.inc.php');
$sql = "SELECT *  FROM customer;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);



if($resultCheck>0){
    while($row = mysqli_fetch_assoc($result)){
        $stmt = $conn->prepare("insert into order_products(order_reference,name,price,quantity) values(?,?,?,?)");
        $stmt-> bind_param("isii",$row['order_reference'],$row['name'],$row['price'],$row['quantity']);
        $stmt->execute();
        $stmt->close();
    }
}