<?php
header('Location:admindelete.php');
include('connection.inc.php');
$sql = "SELECT * from temp_admin";
$result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result)){
        $stmt = $conn->prepare("insert into products_pricing(price, price_level) values(?,?)");
        $stmt-> bind_param("di",$row['price'],$row['price_level']);
        $stmt->execute();
        $stmt->close();
    }