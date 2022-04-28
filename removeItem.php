<?php

include('connection.inc.php');

$id = $_POST['id'];

if(isset($_POST['remove_item'])){
    $del = mysqli_query($conn,"DELETE FROM cart WHERE id = '$id'");
    if($del){
        header('Location: cart.php', "_self");
    }else{
        echo 'Try again';
    }
}
?>