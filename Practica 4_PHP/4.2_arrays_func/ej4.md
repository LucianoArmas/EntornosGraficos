# Ejercicio 4: Analisis del codigo

```php
<?php
function comprobar_nombre_usuario($nombreUsuario){
  if (strlen($nombreUsuario)<3 || strlen($nombreUsuario)>20){
  echo $nombreUsuario . " no es válido<br>";
  return false;
  }
  $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
  for ($i=0; $i<strlen($nombreUsuario); $i++){
  if (strpos($permitidos, substr($nombreUsuario,$i,1))===false){
  echo $nombreUsuario . " no es válido<br>";
  return false;
  }
  }
  echo $nombreUsuario . " es válido<br>";
  return true;
}

comprobar_nombre_usuario("Luciano");

?>
```
  Dentro de la funcion *comprobar_nombre_usuario();* se realiza lo siguiente:
    - Se comprueba que el nombre enviado por parametro tenga un tamañano entre 3 y 20
    - Despues se analiza que los caracteres del nombre sean alfanumericos y/o guiones medio y bajo
    - Por ultimo devuelve un mensaje indicando si el nombre es valido o no

  Con la sentencia *comprobar_nombre_usuario("Luciano");* se llama al metodo enviando como parametro el nombre **Luciano**.



