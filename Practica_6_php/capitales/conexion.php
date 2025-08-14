<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "Capitales";

$link = mysqli_connect($host, $user, $pass, $db)
    or die("Error de conexión: " . mysqli_connect_error());
?>
