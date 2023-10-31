<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario con Nom de User</title>
</head>
<body>
  <form action="cookiUserName.php" method="post">
    <p>Ingrese UserName: </p>
    <input type="text" name="username">
    <input type="submit" name="Submit" value="Enviar">
  </form>
  <?php
    if(isset($_COOKIE["nomuser"])){
      echo"El ultimo nombre ingresado fue: <b>".$_COOKIE["nomuser"]."</b>";
    }
  ?>
</body>
</html>