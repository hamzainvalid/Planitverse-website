<?php require_once('config.php');

     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $confirm_password = $_POST['confirm_password'];

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
               'null',
               'null',
          ));
          header('location:login.php?success=Registration Successfully Done');
     }

   
?>