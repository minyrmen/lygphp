<html>
 <head>
  <title></title>
 </head>
 <body>

<form action = "?" method="POST">
     username: <input type="text" name="name"/></br>
     password: <input type="password" name="password"/>
     <input type="submit" value="login">

<?php
$username = $_POST['name'];
$password = $_POST['password'];

if ($username == 'admin' && $password == '1234') {
  echo "Tere admin";
}
else {
  echo "Valed andmed";
}
?>

 </form>
 </body>
</html>
