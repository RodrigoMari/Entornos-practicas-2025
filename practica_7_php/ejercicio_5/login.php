<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Cliente</title>
</head>
<body>
    <h1>Ingrese sus datos</h1>
    <form method="post" action="crear_sesion.php">
        Usuario: <input type="text" name="usuario" required><br><br>
        Clave: <input type="password" name="clave" required><br><br>
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>
