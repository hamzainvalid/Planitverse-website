<?php

    function login($conn, $email, $password){
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $query = mysqli_query($conn, $sql);
        return $query;    
    }

?>