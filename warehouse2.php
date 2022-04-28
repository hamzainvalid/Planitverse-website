<?php
    include("connection.inc.php");
    header('Location:warehouse.php');

    $order_reference = $_POST['order_reference'];

    $sql = "UPDATE sale_orderline SET shipment_status = 'Sent for delivery' WHERE order_reference = $order_reference";
    $result = mysqli_query($conn, $sql);

?>
