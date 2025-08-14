<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "base2";

// Conexión a MySQL
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if (isset($_POST['mail'])) {
    $mail = $conn->real_escape_string($_POST['mail']);

    $sql = "SELECT nombre FROM alumnos WHERE mail='$mail'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        $_SESSION['nombre'] = $fila['nombre'];
        echo "<p>Mail correcto. Variable de sesión creada.</p>";
    } else {
        echo "<p>El mail no existe en la base de datos.</p>";
    }
} else {
    echo "<p>No se envió ningún mail.</p>";
}

$conn->close();
?>

<p><a href="bienvenida.php">Ir a la página de bienvenida</a></p>
