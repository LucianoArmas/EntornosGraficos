# Ejercicio 4 - Escribir codigo HTML


````html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Armas Luciano" />
  <title>Practica 1 HTML - Ejercicio 4</title>
</head>
<body>
  <header>
    <a href="https://www.frro.utn.edu.ar/">
      <img src="https://upload.wikimedia.org/wikipedia/commons/6/67/UTN_logo.jpg" alt="logoUtn" width="100" height="100">
    </a>
    <hr>
  </header>
  <main>
    <h1>Año 2023</time></h1>

    <div id="tablaExamenes">
      <table border="1" cellspacing="0" cellpadding="5" width="500">
        <tr>
          <th colspan="2">Examenes</th>
        </tr>
        <tr>
          <td rowspan="2">Fecha:<time datetime="2023-08-23">23/8/2023</time></td>
          <td style="text-align: end;">Aprobados</td>
        </tr>
        <tr>
          <td style="text-align: end;">24/30</td>
        </tr>
      </table> 
    </div> <br>

    <div id="enlaces">
      <ol>
        <li><a href="#enunciadoExamen">Enunciado del examen</a></li>
        <li><a href="https://www.youtube.com" target="_blank"> Resolucion </a></li>
      </ol>
    </div>

    <div id="formEmail">
      <p>Puedes realizar consultas completando el siguiente formulario:</p>
      <form action="mailto:x@x.com" method="POST" enctype="text/plain" style="position: relative; height: 6rem;">
        <label for="email" width="400px"><b>e-mail</b></label>
        <input id="email" type="email" name="email" required style="position: absolute; left: 6rem; width: 15rem" />
        
        <label for="consulta" style="position: absolute; top: 2rem; left: 0"><b>consulta</b></label>
        <textarea id="consulta" type="text" name="consulta" maxlength="100" required style="position: absolute; top: 2rem; left: 6rem; width: 15rem; height: 100px;"></textarea>
      
        
      <button type="submit" style="position: absolute; top: 10rem; left: 5rem;">
        <b>Enviar</b>
      </button>
      <button type="reset" style="position: absolute; top: 10rem; left: 12rem">
        <b>Borrar</b>
      </button>
      </form>

    <div id="enunciadoExamen" style="padding-top: 100px; width: 300px;">
      <h2>Enunciado del examen</h2>
      <p>Ejercicio 1: ...............................................
        .........................................
        .........................................
        .........................................
        .................................
        .......................
      </p>
      <p>Ejercicio 2: ...............................................
        .........................................
        .........................................
        .........................................
        .................................
        .......................
      </p>
    </div>
  </main>

  <footer>
    <span>
      Para mas informacion direigirse a
      <a href="mailto:contacto@xx.com">contacto@xx.com</a></span
    >
  </footer>

</body>
</html>
````



