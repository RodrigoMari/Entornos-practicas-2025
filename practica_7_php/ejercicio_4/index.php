<?php
$tipo = isset($_COOKIE['tipo_titular']) ? $_COOKIE['tipo_titular'] : 'todos';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Periódico Simulado</title>
</head>
<body>
    <h1>Mi Periódico</h1>

    <p><a href="configurar.php">Configurar tipo de titular</a> | 
       <a href="borrar.php">Borrar configuración</a></p>

    <h2>Titulares</h2>

    <?php
    if ($tipo == 'politica' || $tipo == 'todos') {
        echo "<h3>Noticia política: Elecciones nacionales generan debate</h3>";
    }
    if ($tipo == 'economica' || $tipo == 'todos') {
        echo "<h3>Noticia económica: La bolsa cierra en alza histórica</h3>";
    }
    if ($tipo == 'deportiva' || $tipo == 'todos') {
        echo "<h3>Noticia deportiva: El equipo local gana el campeonato</h3>";
    }
    ?>
</body>
</html>
