<?php
    include("connection.inc.php");
    $sql = "SELECT *  FROM user_products up LEFT JOIN products_store ps on ps.product_name = up.name;";
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
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles_phones.css">
    <link rel="stylesheet" href="css/styles_tablets.css">

    <link rel="icon" type="image/png" href="images/LogoIcon.png">
    <title>Plantiverse</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <nav class="nav">
        <ul class="nav__list">
            <li><a href="index.html" class="nav__logo">
                    <i class="fa fa-leaf nav__logo-icon"></i> PLANTIVERSE</a>
            </li>
            <li class="nav_home">
                <a href="index.html" class="nav__link">Home</a>
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
                <a href="cart.html"><i class="active_cart_link ri-shopping-cart-line nav__link"aria-hidden="true"></i><span>0</span></a>
            </li>
        </ul>
    </nav>

<!DOCTYPE html>
<html>
<head>
<style>
.ui-w-40 {
    width: 40px !important;
    height: auto;
}

.card{
    box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);
}
.btner-group .buttoning {
  background-color: #436FE1;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-table;
  font-size: 16px;
  cursor: pointer;
  width: 25%;
  border: 2px solid #1C336F;
}

.btner-group .buttoning:hover {
  background-color: #1C336F;
}
</style>
</head>
<body>
<!DOCTYPE html>
<html>
<head>

<div class="container px-3 my-5 clearfix" style="margin-top:20px; background-color: white; padding-left: 30px;">
    <div class="card" style="padding-left:2%;">
        <div class="card-header">
          <br /><Br />
            <h2>Shopping Cart</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered m-0">
                <thead>
                  <tr>
                    <th class="text-center py-3 px-4" style="min-width: 400px;">Product</th>
                    <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                    <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                    <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                    <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                  </tr>
                </thead>
                <tbody>

                                  <?php
    if ($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){?>

                  <tr>
                  <form method="post" action="removeproduct.php">
                    <td class="p-4">
                      <div class="media align-items-center">
                        <img src="images/<?= $row['product_thumbnail'] ?>" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                        <div class="media-body">
                          <a href="product.<?= $row['name'] ?>.php" class="d-block text-dark"><?= $row['name'] ?></a>
                        </div>
                      </div>
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">€<?= $row['price'] ?></td>
                    <td class="align-middle p-4"><?= $row['qty'] ?></td>
                    <td class="text-right font-weight-semibold align-middle p-4">€<?= $row['total_price'] ?></td>
                    <input type="hidden" name="name" value="<?= $row['name']; ?>">
                    <td class="text-center align-middle px-0"><input value="x" name="remove" type="submit" onclick = removeItemCounterDecrement()></td>
                   </form>
                  </tr>
                  <h1 style="position:absolute;top:23%;right:0%;margin-right:9%;">Cart Total: €<?= $row['cart_total'] ?>.00</h1>
                            <?php }
    }?>

                </tbody>
              </table>
            </div>
<br /><br />
            <div class="d-flex flex-wrap justify-content-between align-items-center pb-4" style="width: 30%;">
              <div class="mt-4">
                <label class="text-muted font-weight-normal">Apply Promocode</label>
                <input type="text" placeholder="Paste here" class="form-control">
              </div>
            </div>

            <div class="btner-group">
                <a href="store.php" ><button class="buttoning">Back to Store</button></a>
                <a href="checkout.html" ><button class="buttoning">Checkout</button></a><br><br><br><br><br><br><br><br>
            </div>

          </div>
          
      </div>
  </div>



    <div class="footer" style="position:absolute;margin-bottom:-20%;margin-top:15%;">
            <div class="bottom">
              <div class="bottom_about">
                  <h2>Plantiverse</h2>
                  <p>Helping the world look greener since November 2021. Plants from all corners of the universe straight to your living room. Shop now and stay tuned.</p>
              </div>
              <div class="follow_us">
                  <h2>Follow us</h2>
                   <a href="https://www.youtube.com/watch?v=RBUcDwzVUFk"><i class="fa fa-instagram" id="icon"></i></a><a href="https://www.youtube.com/watch?v=RBUcDwzVUFk"><i class="fa fa-twitter" id="icon"></i></a><a href="https://www.youtube.com/watch?v=RBUcDwzVUFk"><i class="fa fa-facebook" id="icon"></i></a> <a href="https://www.youtube.com/watch?v=RBUcDwzVUFk"> <i class="fa fa-pinterest" id="icon"></i></a>
              </div>
              <div class="Tag_Us">
                  <h2>@plantiverse</h2>
                  <p>Post a picture of your plant on Instagram, and hashtag #plantiverse to plant a tree in the Amazons.</p>
              </div>
              <div class="contact_link">
                <div>
                  <a href="contact.html"><i class="fas fa-address-card contact_icon"></i></a>
                </div>
                <div>
                  <a href="contact.html"><h2>Contact Us</h2></a>
                  <a href="contact.html"><p>Have a question? Something you wanna let us know?<br>We are happy to hear from you!</p></a>
                </div>
              </div>
            </div>
        <div class="bottom_line">
            <p><i class="fa fa-copyright" aria-hidden="true"></i> Plantiverse.com - All rights reserved</p>
        </div>
            </div>
    <!--=============== MAIN JS ===============-->
    <script src="js/main.js"></script>
    <script>
        function removeItemCounterDecrement(){
            var counter = localStorage.getItem('cartNumbers');
            counter -= 1;
            localStorage.setItem('cartNumbers', counter);
        }
    </script>
</body>

</html>
