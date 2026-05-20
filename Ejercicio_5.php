<?php
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $division = $numero1 / $numero2;
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 5</title>
    </head>
    <body>
        <hr>
        <h2>Resultado de la división</h2>
        <hr>
        <p><strong>Número 1:</strong> <?php echo $numero1; ?></p>
        <p><strong>Número 2:</strong> <?php echo $numero2; ?></p>
        <p><strong>División:</strong> <?php echo $division; ?></p>
        <a href="index.php">Volver al menú</a> 
    </body>
</html>