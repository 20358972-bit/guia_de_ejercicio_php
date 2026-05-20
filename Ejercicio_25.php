<?php
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $ciudad = $_POST["ciudad"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 25</title>
</head>
<body>
    <hr>
    <h2>Resultado</h2>
    <hr>
    <p>Nombre: <strong><?php echo $nombre; ?></strong></p>
    <p>Correo electrónico: <strong><?php echo $correo; ?></strong></p>
    <p>Ciudad: <strong><?php echo $ciudad; ?></strong></p>
    <a href="index.php">Volver al menú</a>
</body>
</html>