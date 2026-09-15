<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Document</title>
</head>

<body>
    <h1>Sexto ejercicio</h1>
    <?php
    for ($i = 0; $i <= 100; $i++) {
        echo "$i, ";
    }
    ?>

    <br>
    <?php
    $cont = 10;
    while (0 <= $cont) {
        echo "$cont-";
        $cont--;
    }
    ?>
    <h1>Séptimo ejercicio</h1>

    <p>Este contador va del 1 al 100:</p>
    <?php
    for ($i = 0; $i <= 100; $i++) {
        echo "$i, ";
    }
    ?>

    <br>
    <p>Este otro va del 10 al 0:</p>
    <?php

    $cont = 10;
    while (0 <= $cont) {
        echo "$cont-";
        $cont--;
    }
    ?>

</html>