<?php
include('connection.inc.php');

$sku = $_POST['SKU'];
$name = $_POST['name'];
$botanical_name = $_POST['botanical_name'];
$price = $_POST['price'];
$thumbnail = $_POST['thumbnail'];
$category = $_POST['category'];
$availability = $_POST['availability'];

?>

<html>
<head>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<form method="post" action="warehouseEdit4.php" class="payment_info" style="margin-left:100px;"><br>
<label>Product Name</label><br>
<input class="inputss" type="text" name="name" value="<?= $name ?>"><br><br>
<label>Botanical Name</label><br>
<input class="inputss" type="text" name="botanical_name" value="<?= $botanical_name ?>"><br><br>
<label>Price</label><br>
<input class="inputss" type="number" name="price" value="<?= $price ?>"><br><br>
<label>Product Thumbnail</label><br>
<input class="inputss" type="file" name="thumbnail" value="<?= $thumbnail ?>"><br><br>
<label>Category</label><br>
<input class="inputss" type="text" name="category" value="<?= $category ?>"><br><br>
<label>Availability</label><br>
<input class="inputss" type="number" name="availability" value="<?= $availability ?>"><br><br>
<input type="hidden" name="sku2" value="<?= $sku ?>"><br>
<input class="checkout_button" type="submit" value="Change">
</form>
</body>
</html>

