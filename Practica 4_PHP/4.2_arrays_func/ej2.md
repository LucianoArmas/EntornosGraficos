# Ejercicio 2: Indicar las salidas

## a:
```php
<?php
$matriz = array("x" => "bar", 12 => true);
echo $matriz["x"];
echo $matriz[12];
?>
```

  - Con el primer echo se obtiene el strting *bar*
  - Y con el segundo echo se obtiene el numero *1* que corresponde al valor logico de TRUE

  - Por ende la salida es *bar1*


## b:
```php
<?php
$matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
echo $matriz["unamatriz"][6];
echo $matriz["unamatriz"][13];
echo $matriz["unamatriz"]["a"];
?>
```
  La salida es *5942*


## c:
```php
<?php
$matriz = array(5 => 1, 12 => 2);
$matriz[] = 56;
$matriz["x"] = 42; unset($matriz[5]); unset($matriz);
?> 
```
  No se podria obtener ninguna salida, porque con la sentencia *unset($matriz[5]);* se quita la posicion 5 del array (la cual contiene el valor 1) y con la sentencia *unset($matriz);* se elimina todo el array.


