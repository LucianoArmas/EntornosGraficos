
<html>
  <body>
    <?php
    session_start();
    if(!isset($_SESSION["contador"])){
      $_SESSION["contador"] = 1;
    }else{
      $_SESSION["contador"]++;
    }
    ?>
    <a href="index4.php">Pagina principal</a>
  </body>
</html>
