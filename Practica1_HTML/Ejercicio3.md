# Ejercicio 3 - Explicar diferencias en los segmentos de codigo

### 3.a) 

```html
<a href="http://www.google.com.ar">Click aquí para ir a Google</a>
```
Link a la pagina de Google, el texto vinculado con esa pagina es: *"Click aquí para ir a Google"* <br><br>


```html
<a href="http://www.google.com.ar" target="_blank">Click aquí para ir a Google</a>
```
Link a la pagina de Google, el texto vinculado con esa pagina es: *"Click aquí para ir a Google"*. Al hacerle click se abrira la pagina en una ventana nueva. <br><br>


```html
<a href="http://www. google.com.ar" type="text/html" hreflang="es" charset="utf-8" rel="help">
```
Es un link a la paginad de Google, el cual tiene los siguientes atributos:
- `type`: indica que el url se dirige a un archivo de tipo HTML.
- `hreflang`: indica que el documento al cual se dirige está en español.
  - `charset`: indica que el documento al cual se dirige utiliza el conjunto de caracteres UTF-8.
- `rel`: indica que el enlace proporciona ayuda. <br><br>


```html
<a href="#">Click aquí para ir a Google</a>
```
El texto que funciona como link es: "Click aquí para ir a Google", pero como en `href` tiene como valor `#` lo que se hara al dar click en el link es recargar la pagina actual. <br><br>


```html
<a href="#arriba">Click aquí para volver arriba</a>
```
El texto que funciona como link es: "Click aquí para ir a Google", pero como en `href` tiene como valor `#arriba` lo que se hara al dar click en el link es dirigir al usuario hasta el elemento con `id="arriba"`. <br><br>


```html
<a name="arriba" id="arriba"></a>
```
Este hipervinculo no tiene `href` asi que no te redirecciona a ninguna pagina o elemento. Ademas este es el elemento al cual te redirecciona el vinculo anterior. <br><br><br>



---
### 3.b)

```html
<p>
  <img src="im1.jpg" alt="imagen1" />
  <a href="http://www.google.com.ar">Click aquí</a>
</p>
```
Esta sentencia muestra un parrafo, el cual tiene dentro los elementos:
- `<img>`: una imagen la cual tiene como direccion de imagen *im1.jpg* y nombre alternativo en caaso de no encontrar la imagen *imagen1*
- `<a>`: un link el cual tiene como texto *Click aqui* y te redirecciona a Google <br><br>


```html
<p>
  <a href="http://www.google.com.ar">
    <img src="im1.jpg" alt="imagen1" />
  </a>
  Click aquí
</p>
```
Este ejemplo es similar al anterior, pero difiere en que en vez de estar vinculado el texto *Click aqui* con la pagina de Google, lo está la imagen. <<br><br>


```html
<p>
  <a href="http://www.google.com.ar">
    <img src="im1.jpg" alt="imagen1" />
    Click aquí
  </a>
</p>
```
Este caso es muy parecido a los anteriores, pero ahora tanto la imagen como el texto estan vinculados a la pagina de Google. <br><br>


```html
<p>
  <a href="http://www.google.com.ar">
    <img src="im1.jpg" alt="imagen1" />
  </a>
  <a href="http://www.google.com.ar">
    Click aquí
  </a>
</p>
```
Este ejemplo es parecido al anterior, pero en vez de poner la imagen y el texto dentro de un solo hipervinculo, se los pone en hipervinculos separados. Ambos hipervinculos te redireccionan a Google. <br><br><br>



---
### 3.c)

```html
<ul>
  <li>xxx</li>
  <li>yyy</li>
  <li>zzz</li>
</ul>
```
Lo que muestra es una lista desordenada, con los elementos *xxx*, *yyy*, *zzz* <br><br>


```html
<ol>
  <li>xxx</li>
  <li>yyy</li>
  <li>zzz</li>
</ol>
```
Lo que muestra es una lista ordenada, con los elementos *xxx*, *yyy*, *zzz* <br><br>


```html
<ol>
  <li>xxx</li>
</ol>
<ol>
  <li value="2">yyy</li>
</ol>
<ol>
  <li value="3">zzz</li>
</ol>
```
Aca se muestra 3 listas ordenadas, cada una con un item, los cuales son:
- *xxx*: el cual pertenece a la primer lista, y tiene el valor 1
- *yyy*: el cual pertenece a la segunda lista, y se le asigna el valor 2
- *zzz*: el cual pertenece a la tercer lista, y se le asigna el valor 3



```html
<blockquote>
  <p>1. xxx <br/>
     2. yyy <br/>
     3. zzz
  </p>
</blockquote>
```
Este ejemplo muestra un bloque de cita `blockquote`, el cual contiene un elemento parrafo con 3 lineas separadas por un salto de linea. <br><br><br>



---
### 3.d)

```html
<table border="1" width="300">
  <tr>
    <th>Columna 1</th>
    <th>Columna 2</th>
  </tr>
  <tr>
    <td>Celda 1</td>
    <td>Celda 2</td>
  </tr>
  <tr>
    <td>Celda 3</td>
    <td>Celda 4</td>
  </tr>
</table>
```
Muestra una tabla la cual tiene un borde igual a 1px, y un ancho de 300px. Dentro de la tabla hay:
- 1° `<tr>`: es la primer fila de la tabla, en la cual estan los encabezados de las columnas (`<th>`), con valores *Columna 1* y *Columna 2*.
- 2° `<tr>`: es la segunda fila de la tabla, contiene dos celdas de datos, con los datos *Celda 1* y *Celda 2*.
- 3° `<tr>`: es la tercer fila de la tabla, contiene dos celdas de datos, los cuales son *Celda 3* y *Celda 4*. <br><br>


```html
<table border="1" width="300">
  <tr>
    <td><div align="center"><strong>Columna1</strong></div></td>
    <td><div align="center"><strong>Columna2</strong></div></td>
  </tr>
  <tr>
    <td>Celda 1</td>
    <td>Celda 2</td>
  </tr>
  <tr>
    <td>Celda 3</td>
    <td>Celda 4</td>
  </tr>
</table>
```
Muestra una tabla la cual tiene un borde igual a 1px, y un ancho de 300px. Dentro de la tabla hay:
- 1° `<tr>`: es la primer fila de la tabla, contiene 2 celdas de datos (`<td>`). Dentro de cada celda hay un `<div>` alineado al centro de la celda, que contiene un texto en negrita. Los textos contenidos son *Columna 1* y *Columna 2*.
- 2° `<tr>`: es la segunda fila de la tabla, contiene dos celdas de datos, con los datos *Celda 1* y *Celda 2*.
- 3° `<tr>`: es la tercer fila de la tabla, contiene dos celdas de datos, los cuales son *Celda 3* y *Celda 4*. <br><br><br>



---
### 3.e)

```html
<table width="200">
  <caption>Título</caption>
  <tr>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
  </tr>
</table>
```
Muestra una tabla, con un ancho de 200px. Con el elemento `<caption>` se inserta el titulo. 
La tabla tiene 3 filas, y en cada fila hay 3 celdas, las cuales no contienen texto, y tienen fondo gris. <br><br>


```html
<table width="200">
  <tr>
    <td colspan="3"><div align="center">Título</div></td>
  </tr>
  <tr>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
  </tr>
</table>
```
Se muestra una tabla con un ancho de 200px. La tabla tiene 3 filas:
- En la 1° fila hay una celda con el atributo `colspan=3` que hace que las 3 celdas se unfiquen en una sola. A su vez dentro de la celda hay un `<div>` el cual contiene el texto "Titulo" y esta alineado al centro.
- En las filas 2 y 3 no contienen texto, y tienen fondo gris. <br><br><br>



---
### 3.f)

```html
<table width="200">
  <tr>
    <td colspan="3"><div align="center">Título</div></td>
  </tr>
  <tr>
    <td rowspan="2" bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
  </tr>
</table>
```
Muestra una tabla de 200 px de ancho. La tabla tiene 3 filas.
- En la 1° fila hay una celda con el atributo `colspan=3` que hace que las 3 celdas se unfiquen en una sola. A su vez dentro de la celda hay un `<div>` el cual contiene el texto "Titulo" y esta alineado al centro.
- En la 2° fila hay 3 celdas con el fondo gris, la primer celda se unifica con la primer celda de la 3° fila
- En la 3° hay definidas 2 celdas con fondo gris, ya que la primer celda esta unificada con la primer celda de la 2° fila <br><br>


```html
<table width="200">
    <tr>
        <td colspan="3">
            <div align="center">Título</div>
        </td>
    </tr>
    <tr>
        <td colspan="2" bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
</table>
```
Muestra una tabla de 200 px de ancho. La tabla tiene 3 filas.
- En la 1° fila hay una celda con el atributo `colspan=3` que hace que las 3 celdas se unfiquen en una sola. A su vez dentro de la celda hay un `<div>` el cual contiene el texto "Titulo" y esta alineado al centro.
- En la 2° fila hay 3 celdas, las dos primeras estan unificadas
- En la 3° fila hay 3 celdas, con el fondo gris <br><br><br>



---
### 3.g)

```html
<table width="200" border="1">
  <tr>
    <td colspan="3"><div align="center">Título</div></td>
  </tr>
  <tr>
    <td colspan="2"rowspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="50%">&nbsp;</td>
  </tr>
</table>
```
Muestra una tabla de 200 px de ancho y con un borde de 1px. La tabla tiene 3 filas.
- La 1° fila es igual que en la tabla anterior (del ejercicio 3.f)
- La 2° fila tiene 2 celdas, la primer celda esta unificada con la primer celda de la 3° fila
- La 3° fila tiene 2 celdas, la primer celda esta unificada con la primer celda de la 2° fila, y la segunda celda tiene un ancho del 50% de la tabla <br><br>



```html
<table width="200" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2"><div align="center">Título</div></td>
  </tr>
  <tr>
    <td colspan="2"rowspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="50%">&nbsp;</td>
  </tr>
</table>
```
Esta tabla es igual que la anterior, en lo unico que varía es en el borde con los atributos `cellpadding` y `cellspacing`.<br><br><br>



---
### 3.h)

```html
<form id="form1" name="form1" action="procesar.php" method="post" target="_blank">
  <fieldset>
    <legend>LOGIN</legend>
    Usuario: <input type="text" id="usu1" name="usu1" value="xxx" /><br />
    Clave: <input type="password" id="clave1" name="clave1" value="xxx" />
  </fieldset>
  <input type="submit" id="boton1" name="boton1" value="Enviar" />
</form>
```
Es un formulario, el cual al completarlo realiza la accion `procesar.php` con el metodo `post` en una nueva pestaña. Y el form contiene:
- legend = Login
- 2 inputs:
  - Usuario, con el valor por defecto "xxx"
  - Clave, con el valor por defecto "xxx"
- Boton de tipo submit. <br><br>


```html
<form m id="form2" name="form2" action="" method="get" target="_blank">
  LOGIN<br/>
  <label>Usuario: <input type="text" id="usu2" name="usu2" /></label><br />
  <label>Clave: <input type="text" id="clave2" name="clave2" /></label><br />
  <input type="submit" id="boton2" name="boton2" value="Enviar" />
</form>
```
Es un formulario, sin el elemento `<fieldset>`. No hay una accion a ejecutar, el metodo es get y abre una pestaña nueva. El formulario contiene:
- Dos elementos `label`, los cuales asocian los input de usuario y clave con el formulario.
- Un boton para enviar <br><br>


```html
<form id="form3" name="form3" action="mailto:xx@xx.com” enctype=text/plain method="post" target="_blank">
  <fieldset>
    <legend>LOGIN</legend>
    Usuario: <input type="text" id="usu3" name="usu3" /><br />
    Clave: <input type="password" id="clave3" name="clave3" />
  </fieldset>
  <input type="reset" id="boton3" name="boton3" value="Enviar" />
</form>
```
Es un formulario, el cual tiene un bloque `<fieldset>`. Posee un botón de tipo "reset". El atributo `action` es "mailto:xx@xx.com" con método post y `enctype` igual a "text/plain" (es el metodo de cifrado que se hace a la hora de enviar los daots). <br><br><br>



---
### 3.i)

```html
<label>Botón 1
  <button type="button" name="boton1" id="boton1">
  <img src="logo.jpg" alt="Botón con imagen " width="30" height="20" /><br />
  <b>CLICK AQUÍ</b></button>
</label>
```
Muestra el texto "Boton 1" y al lado un boton, el cual contiene una imagen y un texto en negrita que dice "CLICK AQUI". <br><br>


```html
<label>Botón 2
  <input type="button" name="boton2" id="boton2" value="CLICK AQUÍ" />
</label>
```
Muestra el texto "Boton 2" y al lado un boton, el cual contiene un texto que dice "CLICK AQUI". <br><br><br>



---
### 3.j)

```html
<p>
  <label>
    <input type="radio" name="opcion" id="X" value="X" />X
  </label><br />
  <label>
    <input type="radio" name="opcion" id="Y" value="Y" />Y
  </label>
</p>
```
Muestra 2 botones de tipo radio, los cuales al tener el mismo valor del atributo `name`, si se selecciona uno el otro se deselecciona automaticamente. <br><br>



```html
<p>
  <label>
    <input type="radio" name="opcion1" id="X" value="X" />X
  </label><br />
  <label>
    <input type="radio" name="opcion2" id="Y" value="Y" />Y
  </label>
</p>
```
Muestra 2 botones de tipo radio, los cuales tienen distinto valor del atributo `name`, de esta manera se pueden seleccionar ambos. <br><br><br>



---
### 3.k)

```html
<select name="lista">
  <optgroup label="Caso 1">
    <option>Mayo</option>
    <option>Junio</option>
  </optgroup>
  <optgroup label="Caso 2">
    <option>Mayo</option>
    <option>Junio</option>
  </optgroup>
</select>
```
Muestra una lista desplegable con dos categorias, "Caso 1" y "Caso 2". En las cuales aparecen como opciones el nombre de algunos meses. <br><br>


```html
<select name="lista[]" multiple="multiple">
  <optgroup label=" Caso 1">
    <option>Mayo</option>
    <option>Junio</option>
  </optgroup>
  <optgroup label=" Caso 2">
    <option>Mayo</option>
    <option>Junio</option>
  </optgroup>
</select>
```
Es una lista con una barra deslizadora para poder ver las opciones, esta lista contiene dos categorias "Caso 1" y "Caso 2".
Y al tener el atributo `multiple` permite seleccionar multiples opciones.
