<?php
    $metros = $_POST["metros"];
    $centimetros = $metros * 100;
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 14</title>
    </head>
    <body>
        <hr>
        <h2>Datos ingresados</h2>
        <hr>
        <p><strong>Metros:</strong> <?php echo $metros; ?></p>
        <p><strong>Centímetros:</strong> <?php echo $centimetros; ?></p>
        <a href="index.php">Volver al menú</a> 
    </body>
</html>