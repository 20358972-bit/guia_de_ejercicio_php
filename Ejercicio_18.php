<?php
    $nombre = $_POST["nombre"];
    $cantidad = $_POST["cantidad"];
    $precio = $_POST["precio"];
    $producto = $_POST["producto"];
    $subtotal = $cantidad * $precio;
    $total = $subtotal;
    
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 18</title>
    </head>
    <body>
        <hr>
        <h2>Datos ingresados</h2>
        <hr>
        <p><strong>Nombre del cliente:</strong> <?php echo $nombre; ?></p>
        <p><strong>Producto:</strong> <?php echo $producto; ?></p>
        <p><strong>Cantidad:</strong> <?php echo $cantidad; ?></p>
        <p><strong>Precio unitario:</strong> <?php echo $precio; ?></p>
        <p><strong>Subtotal:</strong> <?php echo $subtotal; ?></p>
        <p><strong>Total:</strong> <?php echo $total; ?></p>
        <a href="index.php">Volver al menú</a> 
    </body>
</html>