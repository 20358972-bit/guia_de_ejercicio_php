<?php
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"]; 
    $suma = $numero1 + $numero2;
    $sumb = $numero2 + $numero1;

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <hr>
        <h2>Resultado de la suma</h2>
        <hr>
        <p><strong>Número 1:</strong> <?php echo $numero1; ?></p>
        <p><strong>Número 2:</strong> <?php echo $numero2; ?></p>
        <p><strong>Suma:</strong> <?php echo $suma; ?></p>
        <a href="index.php">Volver al menú</a> 
    </body>
</html>