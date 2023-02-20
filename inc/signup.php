<?php
   //Запуск сессии
   session_start();
   //
   require_once 'connect.php';
   
   //Присвоение переменным имени
   $login = $_POST['login'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $password_confirm = $_POST['password_confirm'];

   //Проверка совпадения паролей
   if ($password === $password_confirm) {
      //connect...

      $password = md5($password);

      mysqli_query($connect, "INSERT INTO 'registration' ('id', 'login', 'email', 'password') VALUES (NULL,'$login','$email','$password')");

      //Вывод сообщение о регистрации
      $_SESSION['message'] = 'Регистрация прошла успешно!';
      header('Location: ../scripts/reg/registration.php');

   } else {
      //Вывод сообщение при несовпадении паролей
      $_SESSION['message'] = 'Пароли не совпадают';
      header('Location: ../scripts/reg/registration.php');
   }

?>