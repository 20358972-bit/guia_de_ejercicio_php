<?php
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"]; 
    $multiplicacion = $numero1 * $numero2;

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4</title>
    </head>
    <body>
        <hr>
        <h2>Resultado de la multiplicación</h2>
        <hr>
        <p><strong>Número 1:</strong> <?php echo $numero1; ?></p>
        <p><strong>Número 2:</strong> <?php echo $numero2; ?></p>
        <p><strong>Multiplicación:</strong> <?php echo $multiplicacion; ?></p>
        <a href="index.php">Volver al menú</a> 
    </body>
</html>