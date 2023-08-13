# Ejercicio 1 - Responder el siguiente cuestionario

### 1. ¿Qué es HTML, cuando fue creado, cuáles fueron las distintas versiones y cuál es la última?
HTML son las siglas de **HyperText Markup Language**, en español sería *Lenguaje de Marcas de Hipertexto*.
Es un lenguaje de marcado para la elaboración de páginas web. Define una estructura básica y un código (denominado código HTML) para la definición de contenido de una página web.

- Su primera versión fue *HTML 2.0*, publicada en el año 1995, la cual fue el primer estándar oficial de HTML.

- La versión *HTML 3.2*, publicada en 1997, es la primer recomendación de HTML publicada por el W3C (Consorcio Internacional), esta versión implementos nuevos avances, como applets de Java y texto que fluye alrededor de las imágenes

- En 1999 se publica la versión *HTML 4.01*, la cual soporta mas opciones de multimedia, lenguajes de scripts, hojas de estilo, mejores capacidades de impresión y documentos mas accesibles a usuarios con discapacidades.

- En 2014 se lanza la ultima versión *HTML 5*, la cual incorpora nuevos elementos que no estaban en HTML 4.01, se introducen nuevas etiquetas, permite introducir audio y video de forma directa en la web sin necesidad de plugins, entre otras cosas.



### 2. ¿Cuáles son los principios básicos que el W3C recomienda seguir para la creación de documentos con HTML?

Los principios que recomienda W3C seguir son:
- **Separar estructura y presentación**: Para reducir tiempos de carga, facilitar las revisiones de los documentos y mejorar la calidad de la experiencia de usuario es necesario separar la estructura de la pagina web (definiéndola en los archivos HTML) de la presentación de la misma (la cual debería estar definida en hojas de estilos).

- **Considerar la accesibilidad universal a la Web**: La web debería ser accesible para todos, en especial para aquellas personas con discapacidades. Para esto los autores deben considerar como pueden representar sus documentos en diferentes plataformas, esto no significa que tienen que limitar su creatividad sino que tienen que considerar representaciones alternativas de sus diseños.

- **Ayudar con la representación incremental**: Los autores pueden ayudar a los agentes de usuario a representar los documentos más rápidamente.



### 3. En las Especificaciones de HTML, ¿Cuándo un elemento o atributo se considera desaprobado? ¿y obsoleto?

Un elemento o atributo es considerado **desaprobado** cuando queda anticuado por la presencia de estructuras nuevas. A su vez los agentes de usuario deben seguir dando soporte a los elementos desaprobados por razones de compatibilidad. 

Un elemento o atributo es considerado **obsoleto** cuando los quedan anticuado por la presencia de estructuras nuevas, y a diferencia de los *desaprobados*, estos no siguen teniendo soporte por parte de los agentes de usuario.


 
### 4. ¿Qué es el DTD y cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01?
El *DTD* es la *Declaración del Tipo de Documento*  la cual define la estructura y sintaxis del documento.

Los DTDs contemplados en HTML 4.01 son:
- *DTD HTML 4.01 Estricto*: incluye todos los elementos y atributos que no han sido desaprobados o que no aparecen en documentos con marcos

- *DTD HTML 4.01 Transicional*: Incluye lo del DTD Estricto más los elementos y atributos desaprobados.

- *DTD HTML 4.01 para Doc con Marcos*: Incluye todo lo del DTD Transicional más los marcos.



### 5. ¿Qué son los metadatos y cómo se especifican en HTML?

<!--stackedit_data:
eyJoaXN0b3J5IjpbMjA1NDg2MTA1MywtMTk5NDcyNjc2OCwtMT
czOTk4ODE5MCwtMTYxNjEwNDM1MSw0NzIwNjc4ODMsNDgxNzEw
MjQyXX0=
-->