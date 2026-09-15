<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">

</head>

<body>

    <h1>Primer ejercicio Arrays</h1>
    <?php
    $randomNums = array();

    for ($i = 0; $i <= 50; $i++) {
        $randomNums[] = rand(0, 99);
    }
    ?>
    <h2>Vector desordenado</h2>
    <ul>
        <?php
        foreach ($randomNums as $randomNum) {
            echo "<li>$randomNum </li>";
        }
        ?>
    </ul>
    <h2>Vector ordenado</h2>
    <ul>
        <?php
        sort($randomNums);
        foreach ($randomNums as $randomNum) {
            echo "<li>$randomNum </li>";
        }
        ?>
    </ul>

    <?php

    $mayor = max($randomNums);
    $menor = min($randomNums);
    $media = array_sum($randomNums) / count($randomNums);
    echo "<h3>El mayor numero del array es: $mayor</h3>";
    echo "<h3>El menor numero del array es: $menor</h3>";
    echo "<h3>La media del array es : $media</h3>";

    ?>
</body>

</html>