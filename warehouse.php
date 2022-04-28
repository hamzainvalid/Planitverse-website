<?php
    include("connection.inc.php");
    $sql = "SELECT *  FROM sale_orderline ORDER BY order_reference DESC";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
?>

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
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles_phones.css">
    <link rel="stylesheet" href="css/styles_tablets.css">
    <link rel="icon" type="image/png" href="images/LogoIcon.png">
    <title>Plantiverse</title>
</head>
<body background="images/home.png" class="bg_img">
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
                <form action="warehouse2.php" method="POST" style="margin-left: 100px;background-color:white;margin-right:100px;padding:20px;opacity:0.9">
                    <h2>Mark an order as shipped</h2>
                    <input type="number" name="order_reference" placeholder="Type Order Reference here" style="width:300px; height: 40px; margin-bottom: 10px;"> <br>
                    <input type="submit" style="font-size:16px;width: 140px; height: 40px; cursor:pointer; background-color: rgb(62, 66, 71); color:white; border-color:transparent;border-radius: 10px;">
                    <br><br>   
                    
                    <table>
                        <tr>
                            <th style="font-size:20px;width:5%;height:5vh;background-color: rgb(62, 66, 71,0.6);color:white;text-align:center;">Order Reference</th>
                            <th style="font-size:20px;width:5%;height:5vh;background-color: rgb(62, 66, 71,0.6);color:white;text-align:center;">SKU</th>
                            <th style="font-size:20px;width:5%;height:5vh;background-color: rgb(62, 66, 71,0.6);color:white;text-align:center;">Plant Name</th>
                            <th style="font-size:20px;width:5%;height:5vh;background-color: rgb(62, 66, 71,0.6);color:white;text-align:center;">Quantity</th>
                            <th style="font-size:20px;width:5%;height:5vh;background-color: rgb(62, 66, 71,0.6);color:white;text-align:center;">Total Price</th>
                            <th style="font-size:20px;width:5%;height:5vh;background-color: rgb(62, 66, 71,0.6);color:white;text-align:center;">Shipping Status</th>
                            
                            
                        </tr>
                        <?php
                    while($row = mysqli_fetch_assoc($result)){?>
                    <tr>
                        <td style="font-size:20px;width:10%;height:5vh;background-color: #f8f9fa;text-align:center;"><?= $row['order_reference']; ?></td>
                        <td style="font-size:20px;width:10%;height:5vh;background-color: #efecef;text-align:center;"><?= $row['SKU']; ?></td>
                        <td style="font-size:20px;width:10%;height:5vh;background-color: #f8f9fa;text-align:center;"><?= $row['name']; ?></td>
                        <td style="font-size:20px;width:10%;height:5vh;background-color: #efecef;text-align:center;"><?= $row['quantity']; ?></td>
                        <td style="font-size:20px;width:10%;height:5vh;background-color: #f8f9fa;text-align:center;"><?= $row['total_price']; ?></td>
                        <td style="font-size:20px;width:10%;height:5vh;background-color: #efecef;text-align:center;"><?= $row['shipment_status']; ?></td>
                    </tr>
                </form>
               <?php }
                ?>
                </table>
                
</body>
</html>

