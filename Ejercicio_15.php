<?php
    $grados_celsius = $_POST["celsius"];
    $grados_fahrenheit = ($grados_celsius * 9/5) + 32;
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 15</title>
    </head>
    <body>
        <hr>
        <h2>Datos ingresados</h2>
        <hr>
        <p><strong>Grados Celsius:</strong> <?php echo $grados_celsius; ?></p>
        <p><strong>Grados Fahrenheit:</strong> <?php echo $grados_fahrenheit; ?></p>
        <a href="index.php">Volver al menú</a> 
    </body>
</html>