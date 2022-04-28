<?php
session_start();
include('connection.inc.php');
include('functions.php');

$user_data = check_login($conn);
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
<body class="bg_img" style="background-color: white;">
  
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
      <li class="user_icon">
        <i class="fa fa-user" data-icon="ri:account-box-fill"></i>
      </li>
      <li class="nav__item cart">
        <a href="cart.html"><i class="ri-shopping-cart-line nav__link" aria-hidden="true"></i><span>0</span></a>
      </li>
    </ul>
  </nav>
  
  
  
  
  <main class="main">
    
    <div class="account_bg">
      
    </div>
    
    
    <div class="profile_info" id="container">
      <div class="editable_info">
        <div contenteditable="true">
          <h2><b>Belal Kilany</b></h2>
        </div>
        <div contenteditable="true">
          <b>+49 152 5100 0000</b>
        </div>
        <div contenteditable="true">
          <b>example@gmail.com</b>
        </div>
      </div>
    </div>
    <div class="avatar">
      
      <div id="chosen_avatar" class="no_avatar"></div>
      
      <button id="showMenuButton"><b><i class="fas fa-edit"></i></b></button>
      
      <span class="avatars_menu" id="avatars_menu">
        <a id="hideMenuButton"><i class="fas fa-times-circle"></i></a>
        <button onclick="Ahmed()"><b>Avatar A</b></button>
        <button onclick="Mikasa()"><b>Avatar B</b></button>
        <button onclick="Samantha()"><b>Avatar C</b></button>
        <button onclick="Scott()"><b>Avatar D</b></button>
        <button onclick="Phillipe()"><b>Avatar E</b></button>
        <button onclick="William()"><b>Avatar F</b></button>
      </span>
      
      
    </div>
    
    <div class="user_bio">
      <div class="bio_text">
        <i><strong>My bio</strong></i><br>
        <textarea type="text" name="bio" contenteditable="true"></textarea>
      </div>
    </div>
    
    
    <div class="user_history">
      
      <div class="previous_orders">
        
        <h2>My Order History:</h2>
        <ul class="previous_orders_list">
          <li> <p>Date: 12.12.2021</p> </li>
          <li> <p>Order Nr: A0121</p> </li>
          <li> <p>Quantity: 1</p> </li>
          <li> <p>Status: Delivered</p> </li>
          <li> <p>Total: €62.49</p> </li>
        </ul>
      </div>
      
      <div class="previous_orders">
        
        <h2>My Saved Addresses:</h2>
        <ul class="saved_addresses_list">
          <li><p>Belal Kilany</p></li>
          <li><p>Seestraße 52</p></li>
          <li><p>10963, Berlin</p></li>
          <li><p>Germany</p></li>
        </ul>
      </div>
      
    </div>
    
    
    
    
    
    <div class="profile3">
      
      <div class="my_garden">
        <img src="https://t4.ftcdn.net/jpg/02/22/77/49/360_F_222774983_f0BwC8oHcpHZ1oY9pmReGSv2uiLSo2DJ.webp" alt="">
        <h2 class="your_plants">My Plant Family</h2>
      </div>
      
      <table class="table_style" id="tableinfo">
        <tr>
          <th>Plant</th>
          <th>Botanical Name</th>
          <th>Origin</th>
          <th>Download Guide</th>
        </tr>
        <tr>
          <td>Gavin</td>
          <td>Agave Attenuata</td>
          <td>Mexico</td>
          <td><a href="#"><u>Agave Plant Care Guide</u></a></td>
        </tr>
        <tr>
          <td>Daffy</td>
          <td>Dieffenbachia</td>
          <td>Sweden</td>
          <td><a href="#"><u>Dieffenbachia Plant Care Guide</u></a></td>
        </tr>
        <tr>
          <td>Skippy</td>
          <td>Scindapsus Pictus</td>
          <td>Mexico</td>
          <td><a href="#"><u>Scindapsus Plant Care Guide</u></a></td>
        </tr>
        <tr>
          <td>Diana</td>
          <td>Strobilanthes Dyeriana</td>
          <td>Myanmar</td>
          <td><a href="#"><u>Strobilanthes Plant Care Guide</u></a></td>
        </tr>
        <tr>
          <td>Yes</td>
          <td>Quadric. Tradescantia</td>
          <td>North & South America</td>
          <td><a href="#"><u>Quadric. Plant Care Guide</u></a></td>
        </tr>
        <tr>
          <td>Snake</td>
          <td>Snake Plant</td>
          <td>Southeast Asia</td>
          <td><a href="#"><u>Snake Plant Care Guide</u></a></td>
        </tr>
      </table>
    </div>
  </div>
</div>
<br /><br />



</main>


<!--=============== MAIN JS ===============-->
<script src="js/main.js"></script>

<script>

const avatars_menu = document.getElementById("avatars_menu");
const hideMenuButton = document.getElementById("hideMenuButton");
const showMenuButton = document.getElementById("showMenuButton");


hideMenuButton.addEventListener("click", function() {
  avatars_menu.style.visibility = "hidden";
} );
showMenuButton.addEventListener("click", function() {
  avatars_menu.style.visibility = "visible";
} );


function Ahmed() {
  var avatar = document.getElementById("chosen_avatar");
  avatar.classList.remove("no_avatar");
  avatar.classList.remove("avatar_Rose");
  avatar.classList.remove("avatar_Scott");
  avatar.classList.remove("avatar_Tokyo");
  avatar.classList.remove("avatar_Tyson");
  avatar.classList.remove("avatar_Mikasa");
  avatar.classList.remove("avatar_William");
  avatar.classList.remove("avatar_Phillipe");
  avatar.classList.remove("avatar_Samantha");
  avatar.classList.add("avatar_Ahmed");
}
function Mikasa() {
  var avatar = document.getElementById("chosen_avatar");
  avatar.classList.remove("no_avatar");
  avatar.classList.remove("avatar_Rose");
  avatar.classList.remove("avatar_Scott");
  avatar.classList.remove("avatar_Tokyo");
  avatar.classList.remove("avatar_Tyson");
  avatar.classList.remove("avatar_Ahmed");
  avatar.classList.remove("avatar_William");
  avatar.classList.remove("avatar_Phillipe");
  avatar.classList.remove("avatar_Samantha");
  avatar.classList.add("avatar_Mikasa");
}
function Samantha() {
  var avatar = document.getElementById("chosen_avatar");
  avatar.classList.remove("no_avatar");
  avatar.classList.remove("avatar_Rose");
  avatar.classList.remove("avatar_Scott");
  avatar.classList.remove("avatar_Tokyo");
  avatar.classList.remove("avatar_Tyson");
  avatar.classList.remove("avatar_Ahmed");
  avatar.classList.remove("avatar_William");
  avatar.classList.remove("avatar_Phillipe");
  avatar.classList.remove("avatar_Mikasa");
  avatar.classList.add("avatar_Samantha");
}
function Scott() {
  var avatar = document.getElementById("chosen_avatar");
  avatar.classList.remove("no_avatar");
  avatar.classList.remove("avatar_Rose");
  avatar.classList.remove("avatar_Samantha");
  avatar.classList.remove("avatar_Tokyo");
  avatar.classList.remove("avatar_Tyson");
  avatar.classList.remove("avatar_Ahmed");
  avatar.classList.remove("avatar_William");
  avatar.classList.remove("avatar_Phillipe");
  avatar.classList.remove("avatar_Mikasa");
  avatar.classList.add("avatar_Scott");
}
function William() {
  var avatar = document.getElementById("chosen_avatar");
  avatar.classList.remove("no_avatar");
  avatar.classList.remove("avatar_Rose");
  avatar.classList.remove("avatar_Samantha");
  avatar.classList.remove("avatar_Tokyo");
  avatar.classList.remove("avatar_Tyson");
  avatar.classList.remove("avatar_Ahmed");
  avatar.classList.remove("avatar_Scott");
  avatar.classList.remove("avatar_Phillipe");
  avatar.classList.remove("avatar_Mikasa");
  avatar.classList.add("avatar_William");
}
function Phillipe() {
  var avatar = document.getElementById("chosen_avatar");
  avatar.classList.remove("no_avatar");
  avatar.classList.remove("avatar_Rose");
  avatar.classList.remove("avatar_Samantha");
  avatar.classList.remove("avatar_Tokyo");
  avatar.classList.remove("avatar_Tyson");
  avatar.classList.remove("avatar_Ahmed");
  avatar.classList.remove("avatar_William");
  avatar.classList.remove("avatar_Scott");
  avatar.classList.remove("avatar_Mikasa");
  avatar.classList.add("avatar_Phillipe");
}



</script>

</body>
</html>
