<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingreso Alumno</title>
</head>
<body>
    <h1>Ingrese su correo electrónico</h1>
    <form method="post" action="verificar_alumno.php">
        Mail: <input type="email" name="mail" required><br><br>
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>
