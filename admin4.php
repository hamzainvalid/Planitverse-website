<?php
header('Location:admin5.php');
include('connection.inc.php');
$sql = "SELECT * from temp_admin";
$result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result)){
        $stmt = $conn->prepare("insert into products_inventory(stock, pot_stock, availability) values(?,?,?)");
        $stmt-> bind_param("iii",$row['stock_qty'],$row['pot_stock_qty'], $row['availability']);
        $stmt->execute();
        $stmt->close();
    }