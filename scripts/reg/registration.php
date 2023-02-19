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
   <div id=reg_inside>
      <form id=reg_win action="" method="">
         <label>Имя</label>
         <input type="text" placeholder="Введите имя">
         <label>Почта</label>
         <input type="email" placeholder="Введите адрес эл. почты">
         <label>Пароль</label>
         <input type="password" placeholder="Введите пароль">
         <label>Подтвердите пароль</label>
         <input type="password" placeholder="Подтвердите пароль">
         <button>Войти</button>         
      </form>
      <form action="../../scripts/auth/authorization.php" target="_self">
            <button>Авторизация</button>
         </form>
   </div>

</body>
</html>