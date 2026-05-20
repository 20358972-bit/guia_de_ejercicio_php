<?php
    $edad = $_POST["edad"];
    $edad_futura = $edad + 10;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 24</title>
</head>
<body>
    <hr>
    <h2>Resultado</h2>
    <hr>
    <p>La edad que tendrá dentro de 10 años es <strong><?php echo $edad_futura; ?></strong>.</p>
    <a href="index.php">Volver al menú</a>
</body>
</html>