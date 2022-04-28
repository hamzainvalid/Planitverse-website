<?php
include("connection.inc.php");
$sql = "SELECT sl.total_revenue as total, i.name as name, i.price as price, i.invoice_id as invoice_id, i.order_ref as order_ref, i.qty as quantity, i.fname as fname, i.lname as lname, i.address as address, i.city as city, i.street as street, i.created_at as created_at, i.vat as vat, i.amount_total as total_price, sl.country as country, sl.email as email, sl.SKU as SKU FROM invoice i LEFT JOIN sale_orderline sl on sl.order_reference = i.order_ref WHERE i.order_ref = (SELECT MAX(order_reference) FROM sale_orderline) AND sl.name <> i.name;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$order_ref = $row['order_ref'];
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="css/styles.css">
  <link rel="icon" type="image/png" href="images/LogoIcon.png">
  <title>Plantiverse</title>
</head>
<body background="images/home.png" class="bg_img">
  <!--==================== HEADER ====================-->
  <nav class="nav">
    <ul class="nav__list">
      <li><a href="index.html" class="nav__logo">
        <i class="fa fa-leaf nav__logo-icon"></i> PLANTIVERSE</a>
      </li>
      <li class="nav_home">
        <a href="index.html" class="nav__link active_link">Home</a>
      </li>
      <li class="nav_products">
        <a href="store.php" class="nav__link">Products</a>
      </li>
      <li class="nav_about">
        <a href="aboutUs.html" class="nav__link">About</a>
      </li>
      <li class="user_icon">
        <a href="#"><i class="fa fa-user" data-icon="ri:account-box-fill"></i></a>
      </li>
      <li class="nav__item cart">
        <a href="cart.html"><i class="ri-shopping-cart-line nav__link" aria-hidden="true"></i><span>0</span></a>
      </li>
    </ul>
  </nav>


  <main class="confirmationPage">
    <img class="leaves1" src="http://saintaloysiusnewark.com/wp-content/uploads/2019/04/leaf-clipart-palm-leaves-8.png" alt="">
    <div class="order_confirmation">
      <div class="leaves3">
      </div>
      <h2>Your order is complete!</h2>
      <img src="images/Celebration.png" style="width:10%;transform:scaleX(-1);opacity:0.9;"> <br>
      <p style="background-color:#EFEFEF;padding:0.3%;margin:0.5%;text-align:left;text-indent:1%;">
        Congratulations on your new roommates! Here is a little summary of your order:</p>
        <div id="InvoicePDF">
          <div class="order_details">


            <table>
            <tr>
                <th>Item</th><th>Item Nr.</th><th>Quantity</th><th>Total</th><th>Delivery</th><th>Care Guide (PDF)</th>
              </tr>
              
              <?php
                while($row = mysqli_fetch_assoc($result)){?>
              <tr>
                <td><?= $row['name'] ?></td>
                <td><?= $row['SKU'] ?></td>
                <td><?= $row['quantity'] ?></td>
                <td>€<?= $row['total_price'] ?>.00</td>
                <td><?= date('Y-m-d', strtotime($row['created_at']. ' + 3 days')) ?></td>
                <td style="text-indent: 25%;"><a href="Guides/<?= $row['name'] ?>.pdf" download="<?= $row['name'] ?>.pdf"><i style="font-size:150%;" class="ri-download-2-fill"></i></a></td>
              </tr>
              <?php }?>
              <br>
              
            </table>
            <br><p>Tip: Hold on to your customer invoice. It contains important information about your order! - Plantiverse team</p>
          </div>
          <img src="images/TY4Order2.png" style="width:36%;margin-right:1%;border-radius:10%;margin-top:-3%;">
        </div>
        <div><h3><a href="store.php">Back to store</a></h3></div>
      </div>
      <img class="leaves2" src="http://saintaloysiusnewark.com/wp-content/uploads/2019/04/leaf-clipart-palm-leaves-8.png" alt="">
    </main>
  </body>
  </html>