<?php

   include 'config.php';
   $connect = mysqli_connect("localhost", $dbusername, $dbpassword, $dbname);

   if (!$connect){
      die('Error connect to DataBase');
   }

?>