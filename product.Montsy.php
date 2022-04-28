<?php
include('connection.inc.php');
$sql = "SELECT * FROM products as p LEFT JOIN products_store as ps ON p.product_name = ps.product_name WHERE p.product_name = 'Montsy';";
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

        <title>PLANTIVERSE</title>
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
                        <a href="account.html"><i class="fa fa-user" data-icon="ri:account-box-fill"></i></a>
                        </li>
                        <li class="nav__item cart">
                           <a href="cart.php"><i class="ri-shopping-cart-line nav__link" aria-hidden="true"></i><span>0</span></a>
                        </li>
                    </ul>
            </nav>

                

        <main class="main">
        <?php
            
            
            if ($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $img1 = $row['img1_url'];
                    $product_name = $row['product_name'];
                    $product_botanical_name = $row['botanical_name'];
                    $product_price = $row['price'];
                    $category = $row['product_category'];
                    $SKU = $row['SKU'];
                    echo '
                    <div class="products_menu2">
               <br><br><br><h1>'.$product_name.'</h1>
               </div>

            <div class="products_menu">
               <a href="store.php" class="nav__link"><p>All Plants</p></a>
               <a href="storeSP.php" class="nav__link"><p>Succulents</p></a>
               <a href="storeTP.php" class="nav__link"><p>Tropical Plants</p></a>
               <a href="storePA.php" class="nav__link"><p>Plant Care Accessories</p></a>
            </div>
            <div class="product_page"><br><br><br>
            <div class="the_product">
                    <img src="images/'.$img1.'" class="product_page_image"><img src="https://i.ibb.co/JBB29Tn/bpa-free3.png" width="8%" height="8%" style="position:absolute;top:6%;left:39%">
                    <div class="product_page_description">
                    <p>Home / Plants / '.$category.'</p>
                    <h4>'.$product_botanical_name.'</h4>
                    <h3>'.$row['description'].'</h3>

                    <form method="post" action="addtocart.php" style="padding-left:0%;width:100%;">
                    <td><h2 id="withoutpot"></h2><p>INCL. VAT</p></td>
                    <input type="hidden" name="name" value="'.$product_name.'">
                    <input type="hidden" name="sku" value="'.$SKU.'">
                    <input type="hidden" name="price" value="'.$product_price.'">
                    <td><p>Quantity: <input type="number" name="qty" value="1" style="padding:1%;border-style:solid;border-color:white;"></p></td>
                    <td><input type="submit" class="add-cart cart1" value="Add to cart" style="padding:2%;text-align:center;width:48%;margin-right:34%;"></td>
                    </form>

                    <script> let prodprice = '.$product_price.';
                    let prodpricepot = prodprice + 5;
                    document.getElementById("withoutpot").innerHTML = "Without pot: <strong>€ " + prodprice + "</strong>";
                    document.getElementById("withpot").innerHTML = "With pot: <strong>€ " + prodpricepot + "</strong>";
                    </script></div></div><br><br><br><br><br><br><br><br>
                    ';
        
                }
            }
            ?>
        </div>
        <div class="footer">
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
        </main>

        <!--=============== MAIN JS ===============-->
        <script src="js/main.js"></script>


    </body>
</html>
