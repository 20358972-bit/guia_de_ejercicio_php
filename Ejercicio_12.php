<?php
    $base = $_POST["base"];
    $altura = $_POST["altura"];
    $area = $base * $altura;
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 12</title>
    </head>
    <body>
        <hr>
        <h2>Datos ingresados</h2>
        <hr>
        <p><strong>Base:</strong> <?php echo $base; ?></p>
        <p><strong>Altura:</strong> <?php echo $altura; ?></p>
        <p><strong>Área:</strong> <?php echo $area; ?></p>
        <a href="index.php">Volver al menú</a> 
    </body>
</html>