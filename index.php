<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Титул</title>
</head>

<body>
   <h1>HTML по крохам</h1>
   <hr>
   <ul>
      <li><a href="html/chapter-1.html">Глава 1 - Текст</a></li>
      <li><a href="html/chapter-2.html">Глава 2 - ***</a></li>
   </ul>
   <?php
   include 'config.php';

   echo date('l, F jS, Y');

   $sql = new mysqli("localhost", $dbusername, $dbpassword, $dbname);
   $sql->query("SET NAMES 'utf8'");

   if ($sql->connect_error) {
      echo 'Error Number: ' . $sql->connect_errno . '<br>';
      echo 'Error: ' . $sql->connect_error;
   }
   $res = $sql->query("select * from ccfp_db");
   var_dump($res);

   $sql->close();

   ?>

   </script>
</body>

</html>