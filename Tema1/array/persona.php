<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <h1>Tercer ejercicio</h1>
    <?php
    $personas = array(
        ['nombre' => 'Oscar', 'altura' => 182, 'email' => 'oscar@correo.com'],
        ['nombre' => 'Pepe', 'altura' => 172, 'email' => 'pepe@correo.com'],
        ['nombre' => 'Pedro', 'altura' => 165, 'email' => 'pedro@correo.com'],
        ['nombre' => 'Fernando', 'altura' => 147, 'email' => 'fernando@correo.com'],
        ['nombre' => 'Facu', 'altura' => 195, 'email' => 'facu@correo.com'],
    );
    ?>
    <h2>Lista de personas</h2>
    <?php
    foreach ($personas as $person) {
        echo '<p>';
        foreach ($person as $key => $value) {
            echo $value . ', ';
        }
        echo '</p>';
    }
    ?>
</body>

</html>