<?php
    $lado = $_POST["lado"];
    $perimetro = 4 * $lado;
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 13</title>
    </head>
    <body>
        <hr>
        <h2>Datos ingresados</h2>
        <hr>
        <p><strong>Lado:</strong> <?php echo $lado; ?></p>
        <p><strong>Perímetro:</strong> <?php echo $perimetro; ?></p>
        <a href="index.php">Volver al menú</a> 
    </body>
</html>