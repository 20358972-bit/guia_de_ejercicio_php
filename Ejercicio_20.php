<?php
    $numero = $_POST["numero"];
    $suma = 0;

    for ($i = 1; $i <= $numero; $i++) {
        $suma = $suma + $i;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 20</title>
</head>
<body>
    <hr>
    <h2>Suma de números del 1 al <?php echo $numero; ?></h2>
    <hr>
    <p>La suma de los números del 1 al <?php echo $numero; ?> es: <strong><?php echo $suma; ?></strong></p>
    <a href="index.php">Volver al menú</a>
</body>
</html>