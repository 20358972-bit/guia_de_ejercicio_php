<?php
    $monto = $_POST["monto"];
    $descuento = 0;
    if ($monto > 50) {
        $descuento = $monto * 0.1;
    }
    $total_con_descuento = $monto - $descuento;
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 17</title>
    </head>
    <body>
        <hr>
        <h2>Datos ingresados</h2>
        <hr>
        <p><strong>Monto total de la compra:</strong> <?php echo $monto; ?></p>
        <p><strong>Descuento aplicado:</strong> <?php echo $descuento; ?></p>
        <p><strong>Total con descuento:</strong> <?php echo $total_con_descuento; ?></p>
        <a href="index.php">Volver al menú</a> 
    </body>
</html>