<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
</head>
<body>
<?php
if (isset($_SESSION['nombre'])) {
    echo "<h1>Bienvenido, " . htmlspecialchars($_SESSION['nombre']) . "!</h1>";
} else {
    echo "<h1>No puede visitar esta página sin iniciar sesión.</h1>";
    echo "<p><a href='login_alumno.php'>Volver al login</a></p>";
}
?>
</body>
</html>
