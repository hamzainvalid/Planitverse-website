<?php
include('connection.inc.php');
$sql = "SELECT *  FROM products_store";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON META ICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== FAVICON ICONS ===============-->
        <script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>


        <!--=============== CSS ===============-->

        <link rel="stylesheet" href="css/styles_phones.css">
        <link rel="stylesheet" href="css/styles_tablets.css">
        <link rel="stylesheet" href="css/styles.css">

        <link rel="icon" type="image/png" href="images/LogoIcon.png">
    <title>Plantiverse</title>
    </head>
    <body background="images/home.png" class="bg_img">

        


        <main class="main">
        <nav class="nav">
                    <ul class="nav__list">
                      <li><a href="admin.html" class="nav__logo">
                          <i class="fa fa-leaf nav__logo-icon"></i> PLANTIVERSE</a>
                        </li>
                        <li><a href="#"> </a>
                        <li><a href="#"> </a>
                        <li><a href="#"> </a>
                        <li><a href="warehouse.php"> Warehouse</a>
                        <li><a href="#"> </a>
                        <li><a href="#"> </a>
                        <li><a href="#"> </a>
                        <li><a href="warehouseEdit.php"> Edit Products</a>
                    </ul>
            </nav>
            <br><br><br><br>
           
        <table style="margin-left: 100px;background-color:white;margin-right:100px;padding:20px;opacity:0.9">
            <h2 style="width:1000px;text-indent:100px;"> Here you can edit your products! </h2>
                <tr>
                    <th style="font-size:20px;width:10%;height:10vh;background-color: rgb(62, 66, 71,0.6);color:white;text-align:center;">SKU</th>
                    <th style="font-size:20px;width:10%;height:10vh;background-color: rgb(62, 66, 71,0.6);color:white;text-align:center;">Plant Name</th>
                    <th style="font-size:20px;width:10%;height:10vh;background-color: rgb(62, 66, 71,0.6);color:white;text-align:center;">Plant Botanical Name</th>
                    <th style="font-size:20px;width:10%;height:10vh;background-color: rgb(62, 66, 71,0.6);color:white;text-align:center;">Price</th>
                    <th style="font-size:20px;width:10%;height:10vh;background-color: rgb(62, 66, 71,0.6);color:white;text-align:center;">Thumbnail</th>
                    <th style="font-size:20px;width:10%;height:10vh;background-color: rgb(62, 66, 71,0.6);color:white;text-align:center;">Category</th>
                    <th style="font-size:20px;width:10%;height:10vh;background-color: rgb(62, 66, 71,0.6);color:white;text-align:center;">Availability</th>
                    </tr>
                    <?php
                    while($row = mysqli_fetch_assoc($result)){?>
                    <tr>
                    <form method="post" action="warehouseEdit2.php">
                        <td style="font-size:20px;width:10%;height:10vh;background-color: #f8f9fa;text-align:center;"><?= $row['SKU']; ?></td>
                        <td style="font-size:20px;width:10%;height:10vh;background-color: #efecef;text-align:center;"><?= $row['product_name']; ?></td>
                        <td style="font-size:20px;width:10%;height:10vh;background-color: #f8f9fa;text-align:center;"><?= $row['product_botanical_name']; ?></td>
                        <td style="font-size:20px;width:10%;height:10vh;background-color: #efecef;text-align:center;"><?= $row['product_price']; ?></td>
                        <td style="font-size:20px;width:10%;height:10vh;background-color: #f8f9fa;text-align:center;"><?= $row['product_thumbnail']; ?></td>
                        <td style="font-size:20px;width:10%;height:10vh;background-color: #efecef;text-align:center;"><?= $row['product_category']; ?></td>
                        <td style="font-size:20px;width:10%;height:10vh;background-color: #f8f9fa;text-align:center;"><?= $row['product_availability']; ?></td>
                        <input type="hidden" name="SKU" value="<?= $row['SKU']; ?>">
                        <input type="hidden" name="name" value="<?= $row['product_name']; ?>">
                        <input type="hidden" name="botanical_name" value="<?= $row['product_botanical_name']; ?>">
                        <input type="hidden" name="price" value="<?= $row['product_price']; ?>">
                        <input type="hidden" name="thumbnail" value="<?= $row['product_thumbnail']; ?>">
                        <input type="hidden" name="category" value="<?= $row['product_category']; ?>">
                        <input type="hidden" name="availability" value="<?= $row['product_availability']; ?>">
                        <td><input class="inputss" type="submit" name="edit" value="Edit"></td>
                        <td><input class="inputss" type="submit" name="remove" value="Remove"></td>
                    </form>
                    </tr>
                    
               <?php }
                ?>
        </main>
        </table>

        <br><br><br><br><br><br>


        <!--=============== MAIN JS ===============-->
        <script>
        function edit(){
            window.location.href="warehouseEdit2.php"
        }
        function remove(){
            window.location.href="warehouseEdit3.php"
        }
        </script>


    </body>
</html>
