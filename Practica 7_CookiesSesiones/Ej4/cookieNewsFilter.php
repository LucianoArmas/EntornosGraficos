<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['noticia'])) {
  $noticia = $_POST['noticia'];
  setcookie('noticia', $noticia, time() + (60*60*24*90));
} else {
  if (isset($_GET['borrar_cookie'])) {
    $noticia = 'todas';
    setcookie('noticia', $noticia, time() + (60*60*24*90));
  } else {
    if (isset($_COOKIE['noticia'])) {
      $noticia = $_COOKIE['noticia'];
    }
  }
}

function getNews($eleccion)
{
  switch ($eleccion) {
    case 'deportes':
      getDeportes();
      break;
    case 'politica':
      getPolitica();
      break;
    case 'economia':
      getEconomia();
      break;
    default:
      getDeportes();
      getPolitica();
      getEconomia();
  }
}


function getEconomia()
{
  echo '<h2>El Peso Argentino la peor moneda</h2>
  <p>"La moneda Argentina ya no vale para nada" declaró el presidente de Irak</p>';
}
function getPolitica()
{
  echo '<h2>Milei vs. Massa</h2>
  <p>"¿Quien ganara las elecciones?" es la pregunta que todos los Argentinos se hacen...</p>';
}
function getDeportes()
{
  echo '<h2>Balon de Oro</h2>
  <p>"Ojala Messi gane el balon de oro" dijo Mbappe durante una entrevista...</p>';
  echo '<h2>Muchachooooos...</h2>
  <p>A 10 meses de la final de Qatar 2022...</p>';
}
?>
