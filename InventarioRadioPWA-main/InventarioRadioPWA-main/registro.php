<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['new-user'];
    $password = password_hash($_POST['new-password'], PASSWORD_BCRYPT); // Hashear la contraseña

    $sql = "INSERT INTO loginadmin (usuario, contra) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $usuario, $password);

    if ($stmt->execute()) {
        header("Location: login.html?registro=exitoso");
        exit();
    } else {
        echo "Error al registrar: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>



