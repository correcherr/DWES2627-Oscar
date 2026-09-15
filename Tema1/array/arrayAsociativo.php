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
    $valores = array();
    for ($i = 0; $i < 100; $i++) {
        $rand = rand(0, 1);
        if ($rand == 1) {
            $valores[] = "M";
        } else {
            $valores[] = "F";
        }
    }
    ?>
    <h2>Segunda parte</h2>
    <?php
    $cantidades = array('M' => 0, 'F' => 0);
    foreach ($valores as $val) {
        echo $val . "-";
        $val == 'M' ? $cantidades['M'] += 1 : $cantidades['F'] += 1;

    }
    echo "<p> M =>" . $cantidades['F'] . " - F => " . $cantidades['M'] . "</p>";
    ?>
</body>

</html>