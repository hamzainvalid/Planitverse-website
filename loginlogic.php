<?php

    if(isset($_REQUEST['login'])){
        $results = login($conn, $email, $password);

        foreach($results as $r){

            $pwd_check = password_verify($password, $r['password']);

            if($pwd_check){
                $_SESSION['email'] = $r['email'];
            }
        
        }
    }

    if(isset($_REQUEST['logout'])){
        session_destroy();
        header("Location: http://plantiverse.ezyro.com/store.php");
        exit();
    }

?>