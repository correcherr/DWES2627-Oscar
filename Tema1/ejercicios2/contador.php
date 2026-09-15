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
    function cuenta($a, $b)
    {
        for ($i = $a; $i <= $b; $i++) {
            echo $i, ", ";
        }
    }
    ?>
    <h1>Primer ejercicio</h1>
    <?php
    cuenta(10, 20)
        ?>
</body>

</html>