<?php
    $numero1 = $_POST["numero1"];

    if ($numero1 % 2 == 0) {
        $par = true;
    } else {
        $par = false;
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 9</title>
    </head>
    <body>
        <hr>
        <h2>Número par o impar</h2>
        <hr>
        <p><strong>Primer número:</strong> <?php echo $numero1; ?></p>
        <p><strong>Es par:</strong> <?php echo $par ? 'Sí' : 'No'; ?></p>
        <a href="index.php">Volver al menú</a> 
    </body>
</html>