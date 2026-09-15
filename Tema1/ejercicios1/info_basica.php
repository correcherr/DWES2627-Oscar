<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <h1>Primer ejercicio</h1>
    <?php
    $name = "Óscar López Correcher";
    $year = 2006;
    ?>
    <p>Me llamo
        <?php echo $name; ?>
        Y nací en el año
        <?php echo $year; ?>.
    </p>
</body>

</html>