<?php
    $dolares = $_POST["dolares"];
    $euros = $dolares * 0.85;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 22</title>
</head>
<body>
    <hr>
    <h2>Resultado</h2>
    <hr>
    <p>La cantidad en dólares <strong><?php echo $dolares; ?></strong> equivale a <strong><?php echo $euros; ?></strong> euros.</p>
    <a href="index.php">Volver al menú</a>
</body>
</html>