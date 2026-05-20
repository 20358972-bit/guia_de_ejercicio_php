<?php
    $nombre = $_POST["nombre"];
    $horas = $_POST["horas"];
    $pago = $_POST["pago"];
    $salario_total = $horas * $pago;
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 16</title>
    </head>
    <body>
        <hr>
        <h2>Datos ingresados</h2>
        <hr>
        <p><strong>Nombre del empleado:</strong> <?php echo $nombre; ?></p>
        <p><strong>Horas trabajadas:</strong> <?php echo $horas; ?></p>
        <p><strong>Pago por hora:</strong> <?php echo $pago; ?></p>
        <p><strong>Salario total:</strong> <?php echo $salario_total; ?></p>
        <a href="index.php">Volver al menú</a> 
    </body>
</html>