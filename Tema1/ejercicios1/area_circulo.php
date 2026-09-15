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
    define('PI', 3.1416);
    $radio = 3.5;
    $areaCirculo = PI * $radio ** 2;
    ?>
    <p>El área del círculo es
        <?php echo $areaCirculo; ?>
    </p>
</body>

</html>