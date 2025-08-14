<?php
session_start();

if (isset($_POST['usuario']) && isset($_POST['clave'])) {
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['clave'] = $_POST['clave'];

    header("Location: mostrar_sesion.php");
    exit();
} else {
    echo "No se enviaron datos del formulario.";
}
?>
