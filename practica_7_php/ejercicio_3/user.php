<!DOCTYPE html>
<html lang="es">
    <body>
        <form method="post" action="">
            Usuario: <input type="text" name="user"><br>
            <input type="submit" name="guardar" value="Guardar">
        </form>

        <?php
        if (isset($_COOKIE['usuario'])) {
            echo "<p>Usuario en cookie: " . htmlspecialchars($_COOKIE['usuario']) . "</p>";
        }
        ?>
    </body>
</html>

<?php
if (isset($_POST['guardar'])) {
    $usuario = $_POST['user'];
    setcookie("usuario", $usuario, time() + (365 * 24 * 60 * 60)); // 1 año de duración
    echo "Usuario guardado en cookie: " . htmlspecialchars($usuario);
    header("Refresh:0");
    exit;
}
?>