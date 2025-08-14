<?php
session_start();

if (isset($_SESSION['usuario']) && isset($_SESSION['clave'])) {
    echo "<h1>Datos de sesión del cliente</h1>";
    echo "<p>Usuario: " . htmlspecialchars($_SESSION['usuario']) . "</p>";
    echo "<p>Clave: " . htmlspecialchars($_SESSION['clave']) . "</p>";
} else {
    echo "<p>No hay datos de sesión disponibles.</p>";
    echo "<p><a href='login.php'>Volver a login</a></p>";
}
?>
