<?php
    $numero = $_POST["numero"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 19</title>
</head>
<body>
    <hr>
    <h2>Tabla de multiplicar del <?php echo $numero; ?></h2>
    <hr>
    <table>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <tr>
                <td><?php echo $numero . " x " . $i . " = " . ($numero * $i); ?></td>
            </tr>
        <?php endfor; ?>
    </table>
    <a href="index.php">Volver al menú</a>
</body>
</html>