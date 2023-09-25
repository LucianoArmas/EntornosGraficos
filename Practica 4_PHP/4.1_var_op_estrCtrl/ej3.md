# Ejercicio 3: explicar uso del codigo

## a-

```php
 <html>
<head><title>Documento 1</title></head>
<body>
<?php
 echo "<table width = 90% border = '1' >";
 $row = 5;
 $col = 2;
 for ($r = 1; $r <= $row; $r++) {
 echo "<tr>";
 for ($c = 1; $c <= $col;$c++) {
 echo "<td>&nbsp;</td>\n";
 } echo "</tr>\n";
 }
 echo "</table>\n";
?>
</body></html>
```

  Lo que muestra es una tabla de 2 columnas y 5 filas.



## b-

```php
<html>
<head><title>Documento 2</title></head>
<body>
<?php
  if (!isset($_POST['submit'])) {
?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 Edad: 
  <input name="age" size="2">
  <input type="submit" name="submit" value="Ir">
 </form>
<?php
}
else {
 $age = $_POST['age'];
 if ($age >= 21) {
  echo 'Mayor de edad';
 }
 else {
  echo 'Menor de edad';
 }
}
?>
</body></html>
```
  Lo que realiza este codigo es lo siguiente. Si el boton de enviar no se acciono muestra un campo de un formulario a completar (en el cual se debe introducir la edad).

  Una vez enviado el formulario se determina si el valor ingresado es mayor o igual que 21, y de ser asi muestra que es "Mayor de edad", en caso contrario se muestra que es "Menor de edad".
