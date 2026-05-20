<?php
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    if ($numero1 < $numero2) {
        $menor = $numero1;
    } else {
        $menor = $numero2;
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 8</title>
    </head>
    <body>
        <hr>
        <h2>Número menor</h2>
        <hr>
        <p><strong>Primer número:</strong> <?php echo $numero1; ?></p>
        <p><strong>Segundo número:</strong> <?php echo $numero2; ?></p>
        <p><strong>Número menor:</strong> <?php echo $menor; ?></p>
        <a href="index.php">Volver al menú</a> 
    </body>
</html>