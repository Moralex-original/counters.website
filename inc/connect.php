<?php
   //подключение config.php
   include '../config.php';
   //Подключение к БД
   $connect = mysqli_connect("localhost", $dbusername, $dbpassword, $dbname);

   //Вывод сообщения об ошибке при подключении к БД
   if (!$connect){
      die('Error connect to DataBase');
   }

?>