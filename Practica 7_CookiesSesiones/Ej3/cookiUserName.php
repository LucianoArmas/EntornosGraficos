<?php
  $username = $_POST["username"];
  if($username !=""){
    setcookie("nomuser", $username, time()+ (60*60*24*90));
    echo"Se creo la cookie con el nombre: ".$username."<br>";
  }
  echo("<a href='./index.php'>Volver al menu principal</a>");
?>