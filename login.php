<?php

    include("connection.inc.php");
    include("funtions.php");
    include("config.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $sql = "SELECT *  FROM user_registration WHERE email = '$email' limit 1";
        $result = mysqli_query($conn, $sql);
        if($result){
            if ($result && mysqli_num_rows($result)>0){
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] == $password){
                    $_SESSION['email'] = $user_data['email'];
                    header("Location: account.php");
                    die;
                }
            }
        }
        
    }


    if(isset($_POST['regsitration'])){

          $name = $_POST['name'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $confirm_password = $_POST['confirm_password'];
          $l_name = 'null';
          $phone = 0;

          if(empty($name)){
               header('location:login.php?error=Name is Required');
          }
          else if(empty($email)){
               header('location:login.php?error=Email is Required');
          }
     else if(empty($password)){
               header('location:login.php?error=password is Required');
          }
          else if(empty($confirm_password)){
               header('location:login.php?error=confirm_password is Required');
          }
          else if($password != $confirm_password){
               header('location:login.php?error=password not Match');
          }
          else{
               $alif = $pdo->prepare("INSERT INTO user_registration(
                    email,
                    password,
                    first_name,
                    last_name,
                    phone
               ) VALUES(?,?,?,?,?)");
               $alif->execute(array(
                    $email,
                    $password,
                    $name,
                    $l_name,
                    $phone,
               ));
               header('location:login.php?success=Registration Successfully Done');
          }

   
    }

    if(isset($_POST['login'])){
          $username = $_POST['username'];
          $password = $_POST['password'];
          if($username == 'admin@gmail.com' and $password == 'admin'){
              header('Location: admin.html');
          }else{
              if(empty($username)){
               header('location:login.php?error=Username is required');
          }
          else if(empty($password)){
               header('location:login.php?error=Password is required');
          }
          else{
               $alif = $pdo->prepare('SELECT * FROM user_registration WHERE email=?');
               $alif->execute(array($username));
               $userCount = $alif->rowCount();
               if($userCount != 0){
                    $result = $alif->fetchAll(PDO::FETCH_ASSOC);
                    $dbPassword = $result[0]['password'];
                    
                    if($dbPassword != $password){
                         header('location:login.php?error=Password wrong');
                        

                    }
                    else{
                         session_start();
                         $_SESSION['id'] = $result[0]['id'];
                         header('location:account.php');
                    }
               }
               else{
                    header('location:login.php?error=Invalid Username or Password');
               }
     
          }
          }
          
         

    };
?>

<!DOCTYPE html>
<html>
<head>
	<title>Plantiverse</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="images/LogoIcon.png">
  <title>Plantiverse</title>
</head>
<body background="images/home.png" class="bg_img">
    <?php 
        if(isset($_REQUEST['error'])){
          echo '<h3 style="background-color:red;color:white;padding:2%;">'.$_REQUEST['error'].'</h3>';
        }
        if(isset($_REQUEST['success'])){
          echo '<h3 style="background-color:green;color:white;padding:2%;">'.$_REQUEST['success'].'</h3>';
        }
    
    ?>
	<div class="back_to_store">
	<a href="">Back to store</a>
	</div>


  <div class="cont">
    <div class="form sign-in">
      <h2>Sign In</h2>
        <form method="POST" action="#">
             <label>
                <span>Email Address</span>
                <input type="email" name="username">
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="password">
            </label>
            <button class="submit" type="submit" name="login">Sign In</button>
            <p class="forgot-pass">Forgot Password ?</p>
        
        </form>

      <div class="social-media">
        <ul>
          <li><img src="images/facebook.png"></li>
          <li><img src="images/twitter.png"></li>
          <li><img src="images/linkedin.png"></li>
          <li><img src="images/instagram.png"></li>
        </ul>
      </div>
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover a great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already have an account, just sign in. We missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Sign Up</h2>
        <form method="POST" action="#">
        <label>
          <span>Full Name</span>
          <input type="text" name="name">
        </label>
        <label>
          <span>Email</span>
          <input type="email" name="email">
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password">
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password" name="confirm_password">
        </label>
        <button type="submit" class="submit" name="regsitration">Sign Up Now</button>
        </form>
      </div>
    </div>
  </div>

  <script>
document.querySelector('.img-btn').addEventListener('click', function()
	{
		document.querySelector('.cont').classList.toggle('s-signup')
	}
);
</script>


<script type="text/javascript" src="jss/login.js"></script>
</body>


</html>
