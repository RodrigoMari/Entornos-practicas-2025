# Ejercitación 1

## 1. ¿Qué es CSS y para qué se usa?

CSS (Cascading Style Sheets) es un lenguaje de hojas de estilo utilizado para describir la presentación de documentos HTML o XML. Se usa para controlar el diseño, colores, fuentes y otros aspectos visuales de una página web, separando el contenido de su presentación.

## 2. CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan?

Una regla CSS consta de:

- **Selector**: Indica a qué elemento(s) HTML se aplicará el estilo.
- **Declaración**: Compuesta por una propiedad y un valor, separados por `:` y terminados con `;`, que definen el estilo.

**Ejemplo**:

```css
p {
  color: blue;
  font-size: 16px;
}
```

- **`p`:** es el selector.
- **`color: blue;` y `font-size: 16px;`:** son declaraciones.

## 3. ¿Cuáles son las tres formas de dar estilo a un documento?

- **Inline (en línea)**: Directamente en el elemento HTML usando el atributo `style`.

```html
<p style="color: green;">Texto verde</p>
```

- **Internal (interna)**: Dentro de la etiqueta `<style>` en el `<head>` del HTML.

```css
<style>
    p { color: red; }
</style>
```

- **External (externa)**: En un archivo .css vinculado con `<link>`.

```html
<link rel="stylesheet" href="estilos.css" />
```

## 4. ¿Cuáles son los distintos tipos de selectores más utilizados? Ejemplifique cada uno.

- **Selector de tipo**: Aplica a elementos HTML por su etiqueta.

```css
div {
  background-color: red;
}
```

- **Selector de clase**: Aplica a elementos con el atributo `class`.

```css
.classic {
  background-color: green;
  color: white;
}
```

- **Selector de ID**: Aplica a un elemento único con el atributo `id`.

```css
#saludo {
  background-color: blue;
  color: white;
}
```

- **Selector universal**: Aplica a todos los elementos.

```css
* {
  margin: 0;
}
```

- **Selector de atributo**: Aplica a elementos con un atributo específico.

```css
a[target='_blank'] {
  color: purple;
}
```

## 5. ¿Qué es una pseudo-clase? ¿Cuáles son las más utilizadas aplicadas a vínculos?

Una pseudoclase CSS es una palabra clave que se añade a los selectores y que especifica un estado especial del elemento seleccionado. Para enlaces las más usadas son:

- **`a:link`**: Enlace no visitado.
- **`a:visited`**: Enlace visitado.
- **`a:hover`**: Cuando el cursor está sobre él.
- **`a:active`**: En el momento de ser clickeado.

## 6. ¿Qué es la herencia?

La herencia en CSS permite que ciertas propiedades de un elemento padre se apliquen a sus hijos. Por ejemplo, si se define `font-family` en el elemento `body`, todos los elementos hijos heredarán esa fuente (a menos que se sobrescriba).

## 7. ¿En qué consiste el proceso denominado cascada?

La cascada determina qué reglas CSS se aplican cuando hay conflictos, basándose en:

- **Origen**: Estilos en línea > internos > externos > predeterminados.
- **Especificidad**: `!important` > ID > clase > tipo.
- **Orden**: La última regla declarada prevalece.

<br>

# Ejercitación 2

## Análisis de reglas y efectos:

### **Regla 1**

```css
p#normal {
  font-family: arial, helvetica;
  font-size: 11px;
  font-weight: bold;
}
```

**Selector:** `p#normal`

- Aplica **solo** al elemento `<p>` que tenga `id="normal"`.

**Declaraciones:**

1. `font-family: arial, helvetica;`: Fuente Arial, o si no está disponible, Helvetica.
2. `font-size: 11px;`: Tamaño de letra pequeño.
3. `font-weight: bold;`: Texto en negrita.

**Efecto en HTML:**

```html
<p id="normal">Este es un párrafo</p>
```

Se mostrará con fuente Arial/Helvetica, tamaño 11px, en negrita.

### **Regla 2**

```css
*#destacado {
  border-style: solid;
  border-color: blue;
  border-width: 2px;
}
```

**Selector:** `*#destacado`

- El `*` es el selector universal. En combinación con `#destacado`, aplica a **cualquier elemento** que tenga ese `id`.

**Declaraciones:**

1. `border-style: solid;`: Borde continuo.
2. `border-color: blue;`: Color de borde azul.
3. `border-width: 2px;`: Grosor del borde de 2px.

**Efecto en HTML:**

```html
<p id="destacado">Este es otro párrafo</p>
<table id="destacado">
  <tr>
    <td>Esta es una tabla</td>
  </tr>
</table>
```

Ambos elementos (`<p>` y `<table>`) tendrán borde azul sólido de 2px.

### **Regla 3**

```css
#distinto {
  background-color: #9ec7eb;
  color: red;
}
```

**Selector:** `#distinto`

- Aplica a **cualquier elemento** que tenga `id="distinto"`.

**Declaraciones:**

1. `background-color: #9ec7eb;`: Fondo celeste.
2. `color: red;`: Texto en color rojo.

**Efecto en HTML:**

```html
<p id="distinto">Este es el último párrafo</p>
```

Se mostrará con fondo celeste y texto rojo.

<br>

# Ejercitación 3

## Análisis de reglas y efectos:

### **Regla 1**

```css
p.quitar {
  color: red;
}
```

**Selector:** `p.quitar`

- Aplica a **párrafos (`<p>`)** que tengan la clase `quitar`.

**Declaración:**

1. `color: red;`: El texto se mostrará en rojo.

**Efecto en HTML:**

```html
<p class="quitar">Este párrafo debe ser quitado de la obra...</p>
```

Texto del párrafo en rojo.

### **Regla 2**

```css
*.desarrollo {
  font-size: 8px;
}
```

**Selector:** `*.desarrollo`

- El `*` es el selector universal (cualquier elemento). En combinación con `.desarrollo`, selecciona **todo elemento** que tenga la clase `desarrollo`.

**Declaración:**

1. `font-size: 8px;`: Tamaño de letra muy pequeño.

**Efecto en HTML:**

```html
<p class="desarrollo">En este primer párrafo trataremos lo siguiente...</p>
```

Texto con tamaño 8px.

### **Regla 3**

```css
.importante {
  font-size: 20px;
}
```

**Selector:** `.importante`

- Selecciona cualquier elemento que tenga la clase `importante`.

**Declaración:**

1. `font-size: 20px;`: Tamaño de letra grande.

**Efectos en HTML:**

```html
<p class="importante">Y este es el párrafo más importante...</p>
<p class="quitar importante">Se pueden aplicar varias clases a la vez</p>
```

Ambos textos con tamaño 20px. En el segundo ejemplo, además se aplicará el color rojo por la clase `quitar` si es un `<p>`.

### **Casos de combinación de clases**

```html
<p class="quitar importante">Se pueden aplicar varias clases a la vez</p>
```

- **Por `p.quitar`** → texto rojo.
- **Por `.importante`** → tamaño 20px.
- Resultado: párrafo en rojo y con letra grande.

### **Caso de elemento no afectado por un selector de tipo**

```html
<h1 class="quitar">Este encabezado también debe ser quitado de la obra</h1>
```

- Tiene clase `quitar`, pero la regla `p.quitar` solo se aplica a `<p>`, así que **no se ve afectado** por esa regla.
- Al no existir una regla `.quitar` general, este `h1` conserva el estilo por defecto.

<br>

# Ejercitación 4

## Caso 1:

**Análisis:**

- **Párrafo (`<p class="contenido" style="font-weight: normal;">`)**:

  - `p`: fuente Arial/Helvetica, tamaño 10px, color negro.
  - `.contenido`: tamaño 14px, negrita.
  - `style="font-weight: normal;"`: sobrescribe la negrita de `.contenido` (mayor prioridad: estilo en línea).
  - **Resultado final**: Arial/Helvetica, 14px, **peso normal** (no negrita), color negro.

- **Tabla**:

  - `* { color: green; }` aplica a celdas y texto, pero el color puede ser sobrescrito.
  - Sin reglas específicas para `<table>` o `<td>`, heredan color verde.

- **Enlace**:
  - **Estado normal**: Gris.
  - **Estado hover**: Fucsia.
  - **Estado active**: Rojo.
  - **Estado visited**: Azul.

## Caso 2:

**Análisis:**

- **Body (`class="contenido"`)**:

  - `.contenido`: tamaño 14px, negrita.
  - Esto afecta a **todo el contenido del body**, a menos que una regla más específica lo sobrescriba.

- **Párrafo (`<p>`)**:

  - Regla `p`: Arial/Helvetica, tamaño 10px, color negro.
  - **Conflicto en font-size**:
    - `.contenido` en `<body>` establece 14px para todo el contenido.
    - `p` establece 10px (más específico que herencia de `.contenido`).
    - Resultado: Arial/Helvetica, 10px, negrita (heredada de `.contenido`), color negro.

- **Tabla**:

  - `.contenido` en `<body>` aplica negrita y 14px por herencia.
  - Color verde por regla universal `*` (no sobrescrito para `<td>`).

- **Enlace**:
  - `.contenido` en `<body>`: tamaño 14px, negrita (heredado).
  - **Estado normal**: Gris.
  - **Estado hover**: Fucsia.
  - **Estado active**: Rojo.
  - **Estado visited**: Azul.

<br>

# Ejercitación 5

## 1. Textos enfatizados dentro de títulos (rojos)

```css
h1 em,
h2 em,
h3 em,
h4 em,
h5 em,
h6 em {
  color: red;
}
```

## 2. Elementos con `href` dentro de párrafos en bloques (negros)

```css
div p [href] {
  color: black;
}
```

## 3. Listas no ordenadas en bloque "ultimo" (amarillas/enlaces azules)

```css
#ultimo ul {
  color: yellow;
}
#ultimo ul a:link {
  color: blue;
  text-decoration: none;
}
```

## 4. Elementos "importante" (verdes/rojos en títulos)

```css
div #importante {
  color: green;
}
h1#importante,
h2#importante,
h3#importante,
h4#importante,
h5#importante,
h6#importante {
  color: red;
}
```

## 5. Elementos h1 con atributo title (azules)

```css
h1[title] {
  color: blue;
}
```

## 6. Enlaces en listas ordenadas (azules/violetas sin subrayado)

```css
ol a:link {
  color: blue;
  text-decoration: none;
}
ol a:visited {
  color: violet;
}
```
