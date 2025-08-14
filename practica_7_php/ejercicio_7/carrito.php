<?php
session_start();

// Conexión a la base de datos
$host = "localhost";
$user = "root"; 
$pass = "";
$db = "Compras";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Error de conexión: " . $conn->connect_error);

$carrito = isset($_SESSION['carrito']) ? $_SESSION['carrito'] : array();
$total = 0;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
</head>
<body>
<h1>Tu Carrito</h1>
<p><a href="index.php">Volver al catálogo</a></p>

<?php if (empty($carrito)): ?>
    <p>El carrito está vacío.</p>
<?php else: ?>
    <table border="1" cellpadding="10">
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
        </tr>
        <?php
        foreach ($carrito as $id => $cantidad):
            $sql = "SELECT * FROM catalogo WHERE id=$id";
            $res = $conn->query($sql);
            $fila = $res->fetch_assoc();
            $subtotal = $fila['precio'] * $cantidad;
            $total += $subtotal;
        ?>
        <tr>
            <td><?= htmlspecialchars($fila['producto']) ?></td>
            <td>$ <?= number_format($fila['precio'],2) ?></td>
            <td><?= $cantidad ?></td>
            <td>$ <?= number_format($subtotal,2) ?></td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3"><strong>Total</strong></td>
            <td><strong>$ <?= number_format($total,2) ?></strong></td>
        </tr>
    </table>
<?php endif; ?>

</body>
</html>

<?php
$conn->close();
?>
