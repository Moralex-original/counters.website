<!DOCTYPE html>
<html lang="en">
<?php
//Запуск сессии
session_start();
?>
<head>
   <title>Counters_and_Calculater</title> <!-- Заголовок страницы в браузере (не более 60 символов) -->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
   <link rel="stylesheet" href="css/style.css"> <!-- Подключаение CSS таблицу стилей -->
   <!-- Настройка окна просмотра -->
   <meta name="author" content="Морщинин Александр"> <!-- Указание автора -->
   <meta name="keywords" content="КБЖУ, счетчик калорий, подсчет финансов"> <!-- Cписок ключевых слов -->
   <meta name="description" content="Подсчет КБЖУ, и прочих прелестей жизни"> <!-- Описание содержимого страницы -->
</head>

<body>
   <h1>HTML по крохам</h1>
   <hr>
   <ul>
      <li><a href="html/chapter-1.html">Глава 1 - Текст</a></li>
      <li><a href="html/chapter-2.html">Глава 2 - Списки</a></li>
   </ul>
   <?php
      echo date('l, F jS, Y');
   ?>

</body>
<footer>
<a href="scripts/auth/authorization.php">Регистрация и вход</a>
</footer>
</html>