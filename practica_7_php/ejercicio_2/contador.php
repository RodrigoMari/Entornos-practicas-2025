<?php
if (isset($_COOKIE['contador'])) {
    $contador = $_COOKIE['contador'] + 1;
    setcookie("contador", $contador, time() + (365 * 24 * 60 * 60)); // 1 año de duración
    $mensaje = "Has visitado esta página <strong>$contador</strong> veces.";
} else {
    $contador = 1;
    setcookie("contador", $contador, time() + (365 * 24 * 60 * 60));
    $mensaje = "¡Bienvenido! Es tu primera visita a esta página.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de visitas</title>
</head>
<body>
    <h1>Contador con Cookie</h1>
    <p><?php echo $mensaje; ?></p>
</body>
</html>
