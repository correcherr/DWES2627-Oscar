<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <h1>Cuarto ejercicio</h1>

    <?php

    $coches = array(
        "4827KPX" => array("Ford", "Mondeo", 5),
        "0194ZRT" => array("Seat", "Leon", 5),
        "7361LMD" => array("BMW", "Serie 3", 3),
        "7091BRZ" => array("Audi", "A4", 5)
    );
    ksort($coches);
    foreach ($coches as $matricula => $coche) {
        echo "Matrícula: " . $matricula . "<br>";
        echo "Marca: " . $coche[0] . "<br>";
        echo "Modelo: " . $coche[1] . "<br>";
        echo "Puertas: " . $coche[2] . "<br>";
        echo "<br>";
    }

    ?>
</body>

</html>