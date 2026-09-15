<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Document</title>
</head>

<body>
    <h1>Cuarto y Quinto ejercicio</h1>
    <?php
    $nota1 = 8.67;
    $nota2 = 9.21;
    $nota3 = 9.67;
    ?>
    <p>EJ 4: La nota mayor es de
        <?php
        echo $nota1 > $nota2 ? $nota1 : $nota2;
        ?>
    </p>
    <p>EJ 5: La nota mayor es de
        <?php
        if ($nota1 > $nota2 && $nota1 > $nota3) {
            echo $nota1;
        } else if ($nota2 > $nota3 && $nota2 > $nota3) {
            echo $nota2;
        } else {
            echo $nota3;
        }
        ?>
    </p>

</body>

</html>