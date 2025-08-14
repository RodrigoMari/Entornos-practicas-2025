<?php
if (isset($_POST['estilo'])) {
    $estilo = $_POST['estilo'];
    setcookie("estilo", $estilo, time() + (30 * 24 * 60 * 60));
} else {
    $estilo = isset($_COOKIE['estilo']) ? $_COOKIE['estilo'] : "estilo1.css";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página con estilos configurables</title>
    <link rel="stylesheet" href="<?php echo $estilo; ?>">
</head>
<body>
    <h1>Bienvenido a mi página</h1>
    <p>Elige el estilo que más te guste:</p>

    <form method="post" action="">
        <select name="estilo">
            <option value="estilo1.css" <?php if ($estilo=="estilo1.css") echo "selected"; ?>>Estilo 1</option>
            <option value="estilo2.css" <?php if ($estilo=="estilo2.css") echo "selected"; ?>>Estilo 2</option>
            <option value="estilo3.css" <?php if ($estilo=="estilo3.css") echo "selected"; ?>>Estilo 3</option>
        </select>
        <input type="submit" value="Aplicar estilo">
    </form>

    <p>Este es un ejemplo de texto en la página.</p>
</body>
</html>
