<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <h1>Ejercicio funcion intercambio</h1>
    <?php
    function intercambia(&$a, &$b)
    {
        $i = $a;
        $a = $b;
        $b = $i;
    }
    ?>
</body>

</html>