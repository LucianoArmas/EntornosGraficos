# Ejercicio 3: Indicar las salidas

## a:
```php
<?php
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
segundos, del $fun[mday]/$fun[mon]/$fun[year]";
?>
```
  La salida es un mensaje que te dice en que momento entraste a la pagina, aclarando hora, minutos, segundos y fecha.


## b:
```php
<?php
function sumar($sumando1,$sumando2){
 $suma=$sumando1+$sumando2;
 echo $sumando1."+".$sumando2."=".$suma;
}
sumar(5,6);
?>
```
  La salida es *5+6=11*

