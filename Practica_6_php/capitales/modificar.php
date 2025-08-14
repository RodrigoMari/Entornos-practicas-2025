<?php
include("conexion.php");

// Si el formulario fue enviado (botón Guardar)
if (isset($_POST['guardar'])) {
    $id = $_POST['id'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $tieneMetro = $_POST['tieneMetro'];

    $sql = "UPDATE Ciudades 
            SET ciudad='$ciudad', pais='$pais', habitantes=$habitantes, superficie=$superficie, tieneMetro=$tieneMetro 
            WHERE id=$id";
    mysqli_query($link, $sql) or die(mysqli_error($link));

    echo "Registro actualizado correctamente.<br>";
    echo "<a href='modificar.php'>Volver al listado</a>";
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($link, "SELECT * FROM Ciudades WHERE id=$id");
    $fila = mysqli_fetch_array($result);
} else {
    $result = mysqli_query($link, "SELECT * FROM Ciudades");
    echo "<h2>Selecciona un registro para modificar</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th><th>Ciudad</th><th>País</th><th>Habitantes</th><th>Superficie</th><th>Tiene Metro</th><th>Acción</th>
            </tr>";
    while ($fila = mysqli_fetch_array($result)) {
        echo "<tr>
                <td>{$fila['id']}</td>
                <td>{$fila['ciudad']}</td>
                <td>{$fila['pais']}</td>
                <td>{$fila['habitantes']}</td>
                <td>{$fila['superficie']}</td>
                <td>{$fila['tieneMetro']}</td>
                <td><a href='modificar.php?id={$fila['id']}'>Modificar</a></td>
            </tr>";
    }
    echo "</table>";
    exit;
}
?>

<h2>Modificar Ciudad</h2>
<form method="post">
    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
    Ciudad: <input type="text" name="ciudad" value="<?php echo $fila['ciudad']; ?>"><br>
    País: <input type="text" name="pais" value="<?php echo $fila['pais']; ?>"><br>
    Habitantes: <input type="number" name="habitantes" value="<?php echo $fila['habitantes']; ?>"><br>
    Superficie: <input type="text" name="superficie" value="<?php echo $fila['superficie']; ?>"><br>
    Tiene Metro (1=Sí, 0=No): <input type="number" min="0" max="1" name="tieneMetro" value="<?php echo $fila['tieneMetro']; ?>"><br>
    <input type="submit" name="guardar" value="Guardar cambios">
</form>
