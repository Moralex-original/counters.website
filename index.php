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
      <li><a href="html/chapter-2.html">Глава 2 - ** *</a></li>
   </ul>
   <?php
   $mysql = new mysqli("localhost", "u1942027_default", "s86b2SalkPDf08hP", "u1942027_ccfp1");
   $mysql->query("SET NAMES 'utf8'");

   if ($mysql->connect_error) {
      echo 'Error Number: ' . $mysql->connect_errno . '<br>';
      echo 'Error: ' . $mysql->connect_error;
   }

   $mysql->close();
   ?>
</body>

</html>