<?php
include("conexion.php");
$result = mysqli_query($link, "SELECT * FROM Ciudades");
echo "<table border='1'>
<tr>
<th>ID</th><th>Ciudad</th><th>País</th><th>Habitantes</th><th>Superficie</th><th>Tiene Metro</th>
</tr>";
while ($fila = mysqli_fetch_array($result)) {
    echo "<tr>
    <td>{$fila['id']}</td>
    <td>{$fila['ciudad']}</td>
    <td>{$fila['pais']}</td>
    <td>{$fila['habitantes']}</td>
    <td>{$fila['superficie']}</td>
    <td>{$fila['tieneMetro']}</td>
    </tr>";
}
echo "</table>";
mysqli_free_result($result);
mysqli_close($link);
?>

<?php include("conexion.php"); ?>
<h4>Ingrese el ID de la ciudad a eliminar</h4>
<form method="post">
    id: <input type="number" name="id" required><br>
    <input type="submit" name="guardar" value="Eliminar">
</form>

<?php
if (isset($_POST['guardar'])) {
    $sql = "DELETE FROM Ciudades WHERE id = {$_POST['id']}";
    mysqli_query($link, $sql) or die(mysqli_error($link));
    echo "Ciudad eliminada correctamente.";
    header("Refresh:0");
    exit;
}
?>