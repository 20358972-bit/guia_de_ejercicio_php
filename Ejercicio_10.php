<?php
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    $promedio = ($nota1 + $nota2 + $nota3) / 3;
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 10</title>
    </head>
    <body>
        <hr>
        <h2>Datos ingresados</h2>
        <hr>
        <p><strong>Primera nota:</strong> <?php echo $nota1; ?></p>
        <p><strong>Segunda nota:</strong> <?php echo $nota2; ?></p>
        <p><strong>Tercera nota:</strong> <?php echo $nota3; ?></p>
        <p><strong>Promedio:</strong> <?php echo $promedio; ?></p>
        <a href="index.php">Volver al menú</a> 
    </body>
</html>