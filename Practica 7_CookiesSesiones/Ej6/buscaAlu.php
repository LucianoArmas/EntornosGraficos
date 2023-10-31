<?php
  session_start();

  $conn = mysqli_connect("lokalhost", "root") or die("Hubo un problema con la conexion a la BD");
  mysqli_select_db($conn, "base2");

  $email = $_POST["email"];

  $query= "SELECT * FROM alumnos alu WHERE alu.mail = $email";
  $result=mysqli_query($conn,$query);
  $row=mysqli_fetch_array($result);

  $_SESSION["nombre"] = $row["nombre"];
  
  header("Location: show.php");
?>