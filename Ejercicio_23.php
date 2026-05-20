<?php
    $precio = $_POST["precio"];
    $iva = $precio * 0.19;
    $total = $precio + $iva;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 23</title>
</head>
<body>
    <hr>
    <h2>Resultado</h2>
    <hr>
    <p>El precio del producto es <strong><?php echo $precio; ?></strong> y el total con IVA incluido es <strong><?php echo $total; ?></strong>.</p>
    <a href="index.php">Volver al menú</a>
</body>
</html>