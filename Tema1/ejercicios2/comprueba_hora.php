<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <h1>Segundo ejercicio</h1>
    <?php
    $textoFecha = date("H:i:s");
    echo "<p>La fecha de hoy es: " . $textoFecha . "</p>";
    $hora = substr($textoFecha, 0, 2);
    $minutos = substr($textoFecha, 3, 2);
    $segundos = substr($textoFecha, 6, 2);
    if ($hora > 24 && $hora < 0 && $minutos > 60 && $minutos > 0 && $segundos < 60 && $segundos > 0) {
        echo $hora, " - ", $minutos, " - ", $segundos;
    } else {
        echo "HORA INVALIDA";
    }
    ?>
</body>

</html>