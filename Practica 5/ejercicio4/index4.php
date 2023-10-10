<?php
session_start();
?>
<html>
  <body>
    <?php
    if(isset($_SESSION["contador"])){
      echo "<p>Has visto <b>".($_SESSION["contador"])."</b> paginas</p>";
    } else{
      echo "<p>No visitaste ninguna pagina aun</p>";
    }
    
    
    ?>
    <br>
    <a href="contador.php">Otra pagina</a>
  </body>
</html>