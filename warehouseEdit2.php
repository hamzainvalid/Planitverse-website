<?php
include('connection.inc.php');

$sku = $_POST['SKU'];
$name = $_POST['name'];
$botanical_name = $_POST['botanical_name'];
$price = $_POST['price'];
$thumbnail = $_POST['thumbnail'];
$category = $_POST['category'];
$availability = $_POST['availability'];


if(isset($_POST['remove'])){
    $sql = "DELETE FROM products_store WHERE SKU ='".$sku. "' ";
    $result = mysqli_query($conn, $sql);
}

if(isset($_POST['edit'])){?>
    <form method="post" action="warehouseEdit3.php">
    <h2>Are you sure you would like to edit the following product?</h1><br>
    <h4>SKU: </h4><p><?= $sku; ?></p>
    <h4>Product Name: </h4><p><?= $name; ?></p>
    <h4>Botanical Name: </h4><p><?= $botanical_name; ?></p>
    <h4>Price: </h4><p><?= $price; ?></p>
    <h4>Thumbnail: </h4><p><?= $thumbnail; ?></p>
    <h4>Category: </h4><p><?= $category; ?></p>
    <h4>Availability: </h4><p><?= $availability; ?></p>
    <input type="hidden" name="SKU" value="<?= $sku; ?>">
    <input type="hidden" name="name" value="<?= $name; ?>">
    <input type="hidden" name="botanical_name" value="<?= $botanical_name; ?>">
    <input type="hidden" name="price" value="<?= $price; ?>">
    <input type="hidden" name="thumbnail" value="<?= $thumbnail; ?>">
    <input type="hidden" name="category" value="<?= $category; ?>">
    <input type="hidden" name="availability" value="<?= $availability; ?>">
    <input class="inputss" type="submit" value="Yes" style="width:20%;font-size:130%;">
    </form>
<?php }
?>