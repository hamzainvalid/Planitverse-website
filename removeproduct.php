<?php
include('connection.inc.php');
header('Location:removeproduct2.php');

$name = $_POST['name'];

if(isset($_POST['remove'])){
    $sql = "DELETE FROM user_products WHERE name ='".$name. "' ";
    $result = mysqli_query($conn, $sql);
}
