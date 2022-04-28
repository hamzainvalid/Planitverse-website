<?php
header('Location:admin6.php');
include('connection.inc.php');
$sql = "SELECT * from temp_admin";
$result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result)){
        $stmt = $conn->prepare("insert into products_variations(size, pot_material, pot_color) values(?,?,?)");
        $stmt-> bind_param("sss",$row['variation_size'],$row['variation_pot_material'], $row['variation_pot_color']);
        $stmt->execute();
        $stmt->close();
    }
