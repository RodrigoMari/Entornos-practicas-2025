<?php include("conexion.php"); ?>
<form method="post">
    Ciudad: <input type="text" name="ciudad"><br>
    País: <input type="text" name="pais"><br>
    Habitantes: <input type="number" name="habitantes"><br>
    Superficie: <input type="text" name="superficie"><br>
    ¿Tiene Metro? (1=Sí, 0=No): <input type="number" name="tieneMetro" min="0" max="1"><br>
    <input type="submit" name="guardar" value="Guardar">
</form>

<?php
if (isset($_POST['guardar'])) {
    $sql = "INSERT INTO Ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
            VALUES ('{$_POST['ciudad']}', '{$_POST['pais']}', {$_POST['habitantes']}, {$_POST['superficie']}, {$_POST['tieneMetro']})";
    mysqli_query($link, $sql) or die(mysqli_error($link));
    echo "Ciudad agregada correctamente.";
}
?>
