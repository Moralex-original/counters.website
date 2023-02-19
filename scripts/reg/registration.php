<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Registration</title> <!-- Заголовок страницы в браузере (не более 60 символов) -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
      <link rel="stylesheet" href="../../css/style_reg.css"> <!-- Подключаение CSS таблицу стилей -->
      <!-- Настройка окна просмотра -->
      <meta name="author" content="Морщинин Александр"> <!-- Указание автора -->
      <meta name="keywords" content="КБЖУ, счетчик калорий, подсчет финансов"> <!-- Cписок ключевых слов -->
      <meta name="description" content="Подсчет КБЖУ, и прочих прелестей жизни"> <!-- Описание содержимого страницы -->
   </head>
<body>

   <!-- Регистрация -->
   <div>
      <form action="../../inc/singup.php" method="post">
         <label>Логин</label>
         <input type="text" name="login" placeholder="Введите логин">
         <label>Почта</label>
         <input type="email" name="email" placeholder="Введите адрес эл. почты">
         <label>Пароль</label>
         <input type="password" name="password" placeholder="Введите пароль">
         <label>Подтвердите пароль</label>
         <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
         <button>Войти</button>         
      </form>
      <form action="../../scripts/auth/authorization.php" target="_self">
            <button>Авторизация</button>
      </form>
         
         <?php
         //Окно с выводом о несовпадении паролей
         if ($_SESSION['massage']) {
            echo '<p class="msg"> ' . $_SESSION['massage'] . ' </p>';
         }
         unset($_SESSION['massage']);
         ?>
   </div>

</body>
</html>