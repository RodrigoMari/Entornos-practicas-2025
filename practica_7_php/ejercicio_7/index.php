<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "Compras";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Error de conexión: " . $conn->connect_error);

if (isset($_POST['agregar'])) {
    $id = intval($_POST['id_producto']);
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

    if (isset($_SESSION['carrito'][$id])) {
        $_SESSION['carrito'][$id] += 1;
    } else {
        $_SESSION['carrito'][$id] = 1;
    }
}

$sql = "SELECT * FROM catalogo";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Productos</title>
</head>
<body>
<h1>Catálogo de Productos</h1>
<p><a href="carrito.php">Ver Carrito</a></p>

<table border="1" cellpadding="10">
    <tr>
        <th>Producto</th>
        <th>Precio</th>
        <th>Agregar</th>
    </tr>
    <?php while($fila = $result->fetch_assoc()): ?>
    <tr>
        <td><?= htmlspecialchars($fila['producto']) ?></td>
        <td>$ <?= number_format($fila['precio'], 2) ?></td>
        <td>
            <form method="post" action="">
                <input type="hidden" name="id_producto" value="<?= $fila['id'] ?>">
                <input type="submit" name="agregar" value="Agregar al carrito">
            </form>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

</body>
</html>

<?php
$conn->close();
?>
