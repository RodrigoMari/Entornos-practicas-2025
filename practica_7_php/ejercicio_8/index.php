<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "prueba";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Error de conexión: " . $conn->connect_error);

$resultados = array();

if (isset($_POST['buscar'])) {
    $termino = $conn->real_escape_string($_POST['termino']);

    $sql = "SELECT * FROM buscador WHERE canciones LIKE '%$termino%'";
    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        while ($fila = $res->fetch_assoc()) {
            $resultados[] = $fila['canciones'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscador de Canciones</title>
</head>
<body>
<h1>Buscador de Canciones</h1>

<form method="post" action="">
    <input type="text" name="termino" placeholder="Ingrese nombre de canción" required>
    <input type="submit" name="buscar" value="Buscar">
</form>

<h2>Resultados:</h2>
<?php
if (!empty($resultados)) {
    echo "<ul>";
    foreach ($resultados as $cancion) {
        echo "<li>" . htmlspecialchars($cancion) . "</li>";
    }
    echo "</ul>";
} elseif (isset($_POST['buscar'])) {
    echo "<p>No se encontraron canciones que coincidan.</p>";
}
?>

</body>
</html>

<?php
$conn->close();
?>
