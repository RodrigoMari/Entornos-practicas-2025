<?php
if (isset($_POST['guardar'])) {
    $tipo_titular = $_POST['tipo'];
    setcookie("tipo_titular", $tipo_titular, time() + (365*24*60*60)); // 1 año
    header("Location: index.php");
    exit();
}

$seleccionado = isset($_COOKIE['tipo_titular']) ? $_COOKIE['tipo_titular'] : '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Configurar Titular</title>
</head>
<body>
    <h1>Configurar qué titular quieres ver</h1>
    <form method="post" action="">
        <input type="radio" name="tipo" value="politica" <?= $seleccionado=='politica' ? 'checked' : '' ?>> Noticia política<br>
        <input type="radio" name="tipo" value="economica" <?= $seleccionado=='economica' ? 'checked' : '' ?>> Noticia económica<br>
        <input type="radio" name="tipo" value="deportiva" <?= $seleccionado=='deportiva' ? 'checked' : '' ?>> Noticia deportiva<br><br>
        <input type="submit" name="guardar" value="Guardar">
    </form>
    <p><a href="index.php">Volver al periódico</a></p>
</body>
</html>
