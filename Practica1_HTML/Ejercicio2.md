# Ejercicio 2 - Análisis de código

### 2.a) 
````html
<!-- Codigo controlado el dia 12/08/2009-->
````
Esta sentencia es un comentario, el cual puede escribirse en cualquier parte del código.
Su función es la de transmitir información adicional por parte del desarrollador a las demás personas que tienen acceso al código fuente.
No es de uso obligatorio, pero si hace a las buenas practicas la implementación del mismo, ayudando a la cooperación entre distintos desarrolladores.


### 2.b) 
````html
<div id="bloque1">Contenido del bloque 1</div>
````

El elemento `<div>` define las divisiones lógicas dentro del contenido de la pagina web.
Este elemento se coloca en la sección del `<body>` de la web.
Su uso no es obligatorio, pero facilita a la hora de agregar estilos o eventos a varios elementos (los cuales se encuentran dentro del mismo div).

En este ejemplo se puede analizar los siguientes componentes del div:
- *id="bloque1"* : es un atributo el cual le define un identificador al div, el cual se lo identifica como *bloque1*. No es obligatorio pero si recomendable.

- *Contenido del bloque 1* : este es el contenido, en este caso es de tipo texto, que esta dentro del div.  No es obligatorio.


### 2.c) 

````html
<img src="" alt="lugar imagen" id="im1" name="im1" width="32" height="32" longdesc="detalles.htm"/>
````

El elemento `<img/>`  se utiliza para representar una imagen dentro de la web.
Se coloca dentro del `<body>`.
Su uso no es obligatorio.

Los componentes del div son:
- *src=""* : es la ruta del archivo imagen al cual se quiere acceder. Es obligatorio especificar cual es la ruta de la imagen a mostrar, no es necesaria ponerla en el documento HTML porque quizás se puede agregar utilizando algún script.

- *alt="lugar imagen"* : es el texto alternativo a mostrar en la web en caso de que no se encuentre la imagen en la ruta especificada. No es obligatorio.

- *id="im1"*: es un atributo el cual le define un identificador a la img. No es obligatorio, pero facilita el hecho de dar estilos e interactividad a la imagen.

- *name="im1"*: es el nombre que se le asigna al elemento. No es obligatorio.

- *width="32"*: es el ancho de la imagen, en este caso es de 32 pixeles. Si es obligatorio especificar el ancho de la imagen, no es necesario aclararlo en el HTML porque se puede acalorar en una hoja de estilos.

- *height="32"*: es el alto de la imagen, en este caso es de 32px. Si es obligatorio especificar el alto de la imagen, no es necesario aclararlo en el HTML porque se puede acalorar en una hoja de estilos.

- *longdesc="detalles.htm"*: este atributo especifica una descripción larga del elemento, en este caso es *detalles.htm*. No es obligatorio.


### 2.d) 

````html
<meta name="keywords" lang="es" content="casa, compra, venta, alquiler " />
<meta http-equiv="expires" content="16-Sep-2019 7:49 PM" />
````
El elemento `<meta>`  se utiliza para declarar metadatos.
Se colocan dentro del `<head>`.
Los atributos que se pueden analizar son:
- *name*: es el nombre al cual se asocia al elemento meta. En este caso es *keywords*. No es obligatorio.

- *lang*:  es el idioma del contenido de la web, en este caso es Español. No es obligatorio, ya que lo puede fijar el navegador.

- *content*: son los datos que se asocian al atributo name o http-equiv. En el 1° ejemplo son *casa, compra, venta, alquiler* y en el 2° es *16-Sep-2019 7:49 PM*. En ambos ejemplos es obligatorio, ya que existe el atributo name y http-equiv a los cuales hacen referencia.

- *http-equiv*: aporta información sobre los encabezado de respuesta HTTP. En este caso es *expires*. Es opcional


### 2.e) 

````html
<a href="http://www.e-style.com.ar/resumen.html" type="text/html" hreflang="es" charset="utf-8" rel="help">Resumen HTML</a>
````
El elemento `<a>`  se utiliza para crear enlaces a otras webs, archivos o ubicaciones dentro de la misma web.
Se usa dentro del `<body>`.
Y su uso no es obligatorio.
Sus atributos son:
- *href*: indica la url a la que se dirige, es obligatorio.

- *type*: indica el tipo de contenido de la url, no es obligatorio.

- *hreflang*: indica el idioma del contenido de la url, no es obligatorio.

- *charset*: indica el codificado de caracters del contenido de la url, es opcional.

- *rel*: indica la relación entre la página actual y la página del url. Tiene un impacto en el SEO y por eso hay que tener precaución a la hora de utilizarlo.

- contenido: en este ejemplo es *Resumen HTML*, el cual es un texto que cumple la función de hipervínculo. Es obligatorio.

 ### 2.e) 

````html
<table width="200" summary="Datos correspondientes al ejercicio vencido">
	<caption align="top"> Título </caption>
	<tr>
		<th scope="col">&nbsp;</th>
		<th scope="col">A</th>
		<th scope="col">B</th>
		<th scope="col">C</th>
	</tr>
	<tr>
		<th scope="row">1º</th>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th scope="row">2º</th>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
</table>
````

* La etiqueta `<table>` permite visualizar una tabla en la web, este va dentro del `<body>`. Los atributos que se le asignan son:
	* *width*: el cual especifica el ancho de la tabla, en este caso es 200 su valor.
	* *summary*: indica el resumen de la tabla, en este caso es "Datos correspondientes al ejercicio vencido". No es obligatorio.
	
* La etiqueta `<caption>` indica el titulo de la tabla, este elemento tiene que ir dentro del elemento `<table>`. El atributo que tiene es:
	* *align*: indica en que parte se posiciona el titulo con respecto a la tabla, en este caso su valor es "top", por ende se posiciona en la parte superior de la tabla. Es opcional.


* Las etiquetas `<tr>` indican las filas de la tabla, las cuales van dentro de `<table`.


* Finalmente están las etiquetas que están dentro de `<tr>` son:
	* `<th>`: indican las celdas utilizadas para encabezados. Su atributo es:
		* *scope*: indica con que otras celdas esta relacionada esa celda.
		
	* `<td>`: indican las celdas utilizadas para datos. Su contenido es:
		* *`&nbsp;`*: el cual indica un espacio.










<!--stackedit_data:
eyJoaXN0b3J5IjpbLTE1ODg0OTI1MTUsLTE5NTMxNTM5NTcsMT
M4MTA5MjcwNSw3MzA5OTgxMTZdfQ==
-->