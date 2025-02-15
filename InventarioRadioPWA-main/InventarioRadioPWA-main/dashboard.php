<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #222;
            color: yellow;
            text-align: center;
            padding: 50px;
        }
        .container {
            border: 2px solid yellow;
            padding: 30px;
            box-shadow: 0 0 15px red;
            background-color: black;
            border-radius: 10px;
            display: inline-block;
        }
        .btn-danger {
            margin-top: 20px;
            background-color: red;
            border-color: red;
        }
        .btn-danger:hover {
            background-color: darkred;
            border-color: darkred;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido Administrador</h1>
        <p>Has iniciado sesión como <strong><?php echo $_SESSION['usuario']; ?></strong></p>
        <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
    </div>
</body>
</html>
