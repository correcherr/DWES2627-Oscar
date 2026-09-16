<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>

    <?php
    function digitos(int $num): int
    {
        return strlen((string) $num);
    }
    function digitoN(int $num, int $pos): int
    {
        return (int) substr(strval($num), 0, $pos);
    }
    function quitaPorDetras(int $num, int $cant): int
    {
        return (int) ($num / (10 ** $cant));
    }
    function quitaPorDelante(int $num, int $cant): int
    {
        return (int) substr(strval($num), 0, $cant);
    }
    ?>

</body>

</html>