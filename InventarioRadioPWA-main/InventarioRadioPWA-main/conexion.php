<?php
$host = "localhost";
$user = "root"; // Cambia esto si tu usuario de MySQL es diferente
$password = "";
$database = "inventarioradio"; // Nombre de la base de datos

$conn = new mysqli($host, $user, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
