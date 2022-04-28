

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
                            <a href="store.html" class="nav__link">Products</a>
                        </li>
                        <li class="nav_about">
                            <a href="aboutUs.html" class="nav__link">About</a>
                        </li>
                        <li class="nav__item cart">
                           <a href="cart.html"><i class="ri-shopping-cart-line nav__link" aria-hidden="true"></i><span>0</span></a>
                        </li>
                    </ul>
            </nav>




        <main class="main">
            <?php echo $user_data['user_name'];?>
                    <ul class="home">
                
                        <li class="home__title"><h1>Plants make life greener</h1></li>
                        <li class="explore_box"><a href="store.html" class="explore_button">Explore</a></li>

        </main>



        <div class="footer">
            <div class="bottom">
                <div class="bottom_about">
                    <h2>Plantiverse</h2>
                    <p>Helping the world look greener since November 2021. Plants from all corners of the universe straight to your living room. Shop now and stay tuned.</p>
                </div>
                <div class="follow_us">
                    <h2>Follow us</h2>
                   <a href="https://www.youtube.com/watch?v=RBUcDwzVUFk"> <i class="fa fa-instagram" id="icon"></i></a> <a href="https://www.youtube.com/watch?v=RBUcDwzVUFk"> <i class="fa fa-twitter" id="icon"></i> </a> <a href="https://www.youtube.com/watch?v=RBUcDwzVUFk"><i class="fa fa-facebook" id="icon"></i> </a> <a href="https://www.youtube.com/watch?v=RBUcDwzVUFk"> <i class="fa fa-pinterest" id="icon"></i></a>
                </div>
                <div class="Tag_Us">
                    <h2>@plantiverse</h2>
                    <p>Post a picture of your plant on Instagram, and hashtag #plantiverse to plant a tree in the Amazons.</p>
                </div>
            </div>
        <div class="bottom_line">
            <p><i class="fa fa-copyright" aria-hidden="true"></i> Plantiverse.com - All rights reserved</p>
        </div>
            </div>
        <!--=============== MAIN JS ===============-->
        <script src="js/main.js"></script>
    </body>
</html>
