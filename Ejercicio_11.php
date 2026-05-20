<?php
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $aprobado = ($nota1 >= 6 && $nota2 >= 6 && $nota3 >= 6) ? "Sí" : "No";
    $reprobado = ($nota1 < 6 || $nota2 < 6 || $nota3 < 6) ? "Sí" : "No";
    $promedio = ($nota1 + $nota2 + $nota3) / 3;
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 11</title>
    </head>
    <body>
        <hr>
        <h2>Datos ingresados</h2>
        <hr>
        <p><strong>Primera nota:</strong> <?php echo $nota1; ?></p>
        <p><strong>Segunda nota:</strong> <?php echo $nota2; ?></p>
        <p><strong>Tercera nota:</strong> <?php echo $nota3; ?></p>
        <p><strong>Promedio:</strong> <?php echo $promedio; ?></p>
        <p><strong>Aprobado:</strong> <?php echo $aprobado; ?></p>
        <p><strong>Reprobado:</strong> <?php echo $reprobado; ?></p>
        <a href="index.php">Volver al menú</a> 
    </body>
</html>