<?php 
     
     $dbHost = 'sql113.ezyro.com';
     $dbName = 'ezyro_30496506_Plantiverse';
     $dbUser = 'ezyro_30496506';
     $dbPassword = 'tzyzsshbn';


     try {
          $pdo= new PDO("mysql:host={$dbHost};dbname={$dbName}",$dbUser,$dbPassword,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
     } catch (PDOException $e) {
          echo "Connection Error:".$e->getMessage();
     }

?>