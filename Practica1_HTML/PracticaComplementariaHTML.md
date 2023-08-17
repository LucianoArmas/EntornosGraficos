# Practica Complementaria HTML

## Ejercicio 1 - Responder el sig cuestionario

### 1. ¿Ventajas de HTML?
- Es gratuito
- Codigo mas ordenado
- Compatibilidad en navegadores
- Almacenamiento mejorado
- Diseño adaptativo


### 2. ¿Por qué utilizarlo?
La gran ventaja de desarrollar aplicaciones HTML5 es que el resultado final es completamente accesible, es decir, se puede acceder aesta aplicación desde un ordenador, tablet o móvil.
Incluso al cambiar de dispositivo, se puede acceder a la aplicación web mediante la URL respectiva, cosa que no sucede con una aplicación móvil.



<br><br><br>
---
## Ejercicio 2 

### 1. ¿Que formatos soporta?
Algunos de los formatos que soporta HTML son:
- png
- jpg
- svg
- gif
- webp

### 2. Crear un elemento audio. Ej: de src https://www.html5tutorial.info/media/vincent.mp3
````html
<audio controls preload="auto">
    <source src="https://www.html5tutorial.info/media/vincent.ogg" type="audio/ogg">
</audio>
````


<br><br><br>
---
## Ejercicio 3 

### 1. Crear un elemento video. Ej src: https://www.w3schools.com/html/mov_bbb.mp4/ogg
````html
<video controls width="320" height="240">
    <source src="https://www.html5tutorial.info/media/html5iscool.ogv" type="video/ogg">
</video>
````


<br><br><br>
---
## Ejercicio 4 

### 1. Crear un form con un campo requerido
````html
<form>
    <label for="email">Email</label>
    <input type="email" id="email" required>
    <button type="submit"><b>Enviar</b></button>
</form>
````


### 2. Crear un form con un campo tipo email y validar que funcione
````html
<form>
    <label for="email">Email</label>
    <input type="email" id="email" required>
    <button type="submit"><b>Enviar</b></button>
</form>
````


### 3. Crear un form con un campo tipo fecha y validar que funcione
````html
<form>
    <label for="date">Date</label>
    <input type="date" id="date" required>
    <button type="submit"><b>Enviar</b></button>
</form>
````


### 4. Crear un form con un campo tipo color y validar que funcione
````html
<form>
    <label for="color">color</label>
    <input type="color" id="color">
    <button type="submit"><b>Enviar</b></button>
</form>
````


### 5. Crear un form con un campo tipo number y validar que funcione. Ademas configurar valores minimos y maximos permitidos
````html
<form>
    <label for="num">color</label>
    <input type="number" max="100" min="1" id="num" required>
    <button type="submit"><b>Enviar</b></button>
</form>
````
