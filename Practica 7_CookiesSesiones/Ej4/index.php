<?php
  include("cookieNewsFilter.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Periodico</title>
</head>
<body>
  <h1 align="center">BOOM NOTICIAS</h1>
  <form method="POST">
    <input type="radio" name="noticia" value="politica">
    <label for="politica">Politica</label>
    <input type="radio" name="noticia" value="economia">
    <label for="economia">Economia</label>
    <input type="radio" name="noticia" value="deportes">
    <label for="deportes">Deportes</label>
    <button>Cambiar seccion</button>
  </form>
  <a href='.?borrar_cookie=true'>Ver todas las secciones</a>


  <div align="center">
      <?php
      getNews($noticia)?>
  </div>
</body>
</html>