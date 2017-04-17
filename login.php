<html>
 <head>
  <title></title>
 </head>
 <body>
<form action="process.php" method="POST">
     username: <input type="text" name="name"/></br>
     password: <input type="password" name="password"/>
     <input type="submit" value="login">
 </form>﻿

 <?php
$username = $_POST['username'];
$password = $_POST['pass'];

if ($username == 'admin' . $password == '1234') {
  echo "Tervist admin";
}
else {
  echo "Valed andmed";
}
  ?>
 </body>
</html>
