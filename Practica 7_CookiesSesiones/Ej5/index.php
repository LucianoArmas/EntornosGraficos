<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables de Sesion</title>
</head>
<body>
  <form action="./varsSesion.php" method="post">
    <p>Uername: </p>
    <input type="text" name="username">
    <p>Password: </p>
    <input type="password" name="password"><br>
    <button type="submit">Entrar</button>
  </form>
</body>
</html>