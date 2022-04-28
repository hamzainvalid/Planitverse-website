<?php
include('connection.inc.php');
header('Location: store.php', '_self');


if(isset($_POST['discount_submit'])){
    $stmt = $conn->prepare("insert into discount(discount) values('1')");
    $stmt->execute();
    $stmt->close();
    
}

if(isset($_POST['no_submit'])){
    $stmt = $conn->prepare("insert into discount(discount) values('0')");
    $stmt->execute();
    $stmt->close();
    
}

