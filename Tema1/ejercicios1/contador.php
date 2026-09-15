<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
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

</html>