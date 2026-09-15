<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <h1>Quinto ejercicio</h1>

    <?php
    $randomNums = array();
    $nums = array();
    for ($i = 0; $i < 6; $i++) {
        for ($j = 0; $j < 9; $j++) {
            $num = rand(100, 999);
            do {
                $randomNums[$i][$j] = $num;

            } while (in_array($num, $nums) != false);

            $randomNums[$i][$j] = $num;
            $nums[] = $nums;
        }
    }

    $maximo = $randomNums[0][0];
    $minimo = $randomNums[0][0];

    $filaMinimo = 0;
    $columnaMaximo = 0;

    for ($i = 0; $i < 6; $i++) {

        for ($j = 0; $j < 9; $j++) {

            if ($randomNums[$i][$j] > $maximo) {
                $maximo = $randomNums[$i][$j];
                $columnaMaximo = $j;
            }

            if ($randomNums[$i][$j] < $minimo) {
                $minimo = $randomNums[$i][$j];
                $filaMinimo = $i;
            }
        }
    }

    for ($i = 0; $i < 6; $i++) {

        echo "<br>";

        for ($j = 0; $j < 9; $j++) {

            if ($j == $columnaMaximo) {
                echo "<span style='color: blue'>" . $randomNums[$i][$j] . "</span> - ";

            } elseif ($i == $filaMinimo) {
                echo "<span style='color: green'>" . $randomNums[$i][$j] . "</span> - ";

            } else {
                echo "<span style='color: black'>" . $randomNums[$i][$j] . "</span> - ";
            }
        }
    }

    ?>

</body>

</html>