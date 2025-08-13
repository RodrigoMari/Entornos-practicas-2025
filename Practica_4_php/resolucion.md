
# Ejercitación 1

## 1. En el siguiente código identificar:
- a) las variables y su tipo
- b) los operadores
- c) las funciones y sus parámetros
- d) las estructuras de control
- e) cuál es la salida por pantalla

### a) 
- `$a` → TRUE → tipo boolean
- `$b` → "xyz" → tipo string
- `$c` → 'xyz' → tipo string
- `$d` → 12 → tipo integer
- `$f` → se asigna después, resultado de función → integer
- `$g` → se asigna después, resultado de operación → integer

### b)
- Aritméticos: `*, +, +=, ++`
- Lógicos/condicionales: `? :`
- Asignación: `=`
- Concatenación: `.`
- Comparación de tipo: `is_int(), is_string()`

### c)
- `doble($i)`
    - Parámetro: `$i`
- `gettype($var)`
- `is_int($var)`
- `is_string($var)`
    - Parámetros en los 3: `$var`

### d)
- `if`
```php
if (is_int($d)) {
    $d += 4;
}
if (is_string($a)) {
    echo "Cadena: $a";
}
```

- `Operador ternario:`
```php
$d = $a ? ++$d : $d * 3;
```

### e)
- Salida en pantalla:
`booleanstringstringinteger1xyzxyz184444`
- Separado en variables
    - $a (boolean TRUE) se convierte a "1" al imprimir
    - $b = "xyz"
    - $c = "xyz"
    - $d = 18
    - $f = 44
    - $g = 44

# Ejercitación 2

## Indicar si los siguientes códigos son equivalentes
### a:
- La salida arranca en 1, con un post-incremento: `1234567910`
- La salida es la misma, el endwhile no modifica nada y en vez de imprimir el valor de i para despues incrementarlo, imprime el valor actual y despues lo incrementa: `12345678910`
- La salida es la misma pero funciona de forma diferente. El valor de i arranca en 0 y lo pre-incrementa antes de printearlo. Ademas, el do while hace que este imprima mientras el valor sea menor a 10, haciendo falso el while cuando i sea igual a 10: `12345678910`
### b:
- For normal sin muchas modificaciones, muestra del 1 al 10: `12345678910`
- El for principal no tiene condicion, lo que lo hace salir del bucle es el break que solo pasa cuando el valor pasa el 9. Muestra la misma salida: `12345678910`
- El for no tiene contador, ni condicion ni sumarizacion en la cabecera, en cambio, esta todo dentro del for. Sale del for con un break de la misma manera que en el ejemplo anterior: `12345678910`
- La acción del for y la sumarizacion esta toda dentro de la parte de la actualización. El bucle no posee cuerpo: `12345678910`
### c:
- Muestra "i equals n" pero revisando las condiciones con un metodo de cascada. Primero se fija si i es igual a 0, si no lo es se fija si i es igual a 1 y si este ultimo no lo es, si es igual a 2.
- En este caso revisa directamente el caso en cuestion, sin depender de que sea diferente a o igual a otra condicion previa.

# Ejercitación 3

## Explicar para qué se utiliza el siguiente código:
### a) 
Muestra en una página un título y acto seguido una tabla de 2 columnas por 5 filas con espacios indivisibles. El metodo de armado es: abrir fila, recorrer cada fila (5), dentro de esa recorrida, todas las columnas (2) asignandole apertura, espacio indivisible y cerradura a cada una y cerrar la fila-
### b) 
Genera un formulario en el que te deja ingresar tu edad y un boton de envío. En el momento que se aprieta el boton el código verifica si la edad es mayor o menor a 21, devolviendo un texto referido a si es o no mayor de edad respectivamente.

# Ejercitación 4
El primer echo no muestra nada ademas de "El" debido a que no esta incluido el archivo que posee los valores de las variables en cuestion. En el segundo, en cambio, sustituye las variables por los valores especificados en el archivo (lee lo traido gracias al include)

# Ejercitación 5
## Analizar el siguiente ejemplo
- Cada vez que se ingresa a la página en cuestion abre ejecuta contador.php. Este ultimo a su vez abre contador.dat y sumariza el contador en 1. Acto seguido muestra el valor en la página web


# Ejercitación 1
## Indicar si los siguientes códigos son equivalentes
Los 2 codigos arman un array asociativo con claves para cada uno de los valores y un 4 en la posicion 0 de dicho array. La diferencia entre los 2 es que uno lo arma directamente con la funcion array mientras que el otro le asigna a la variable con dicha posicion, el valor correspondiente

# Ejercitación 2
## En cada caso, indicar las salidas correspondientes
### a)
La salida sera el valor que posee la variable matriz en la posicion x y 12. Para este caso sera `bartrue`
### b)
En este caso se especifica un array bidimensional de 1 fila y varias columnas. La fila esta especificada con la posicion "unamatriz" y las columnas consiguientes con 3 etiquetas diferentes. Como despues se imprimen los valores en dichas posiciones, la salida seran los valores asignados: `5942`
### c)
Primero asigna a las posiciones 5 y 12 dentro del array matriz 1 y 2 respectivamente. Despues asigna a la posicion siguiente al ultimo (13) el valor 56. Termina asignando a la posicion "x" el valor 42, borrando el valor de la posicion 5 (1) y finalmente borrando la matriz entera

# Ejercitación 3
## En cada caso, indicar las salidas correspondientes
### a)
Asigna a la variable fun la fecha y hora actual. Despues imprime: echo "Has entrado en esta pagina a las `(horas extraidas)` horas, con `(minutos extraidos)` minutos y `(segundos extraidos)` segundos, del `(dia extraido)/(mes extraido)/(año extraido)`
### b)
Se define la funcion sumar, que toma 2 valores, los suma y muestra `sumando 1 + sumando 2 = suma`. Para este caso se le pasa el 5 y el 6, mostrando `5 + 6 = 11`