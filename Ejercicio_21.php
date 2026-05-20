<?php
    $palabra = $_POST["palabra"];
    $letras = strlen($palabra);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 21</title>
</head>
<body>
    <hr>
    <h2>Resultado</h2>
    <hr>
    <p>La palabra <strong><?php echo $palabra; ?></strong> tiene <strong><?php echo $letras; ?></strong> letras.</p>
    <a href="index.php">Volver al menú</a>
</body>
</html>