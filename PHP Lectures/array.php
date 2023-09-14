<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if Statement</title>
</head>

<body>

    <h1>Arrays</h1>

</body>

</html>

<?php

$cars = array('BMW', 'KIA', 'Alto', 'Bolan');

$numbers = array(3,4,6,5,7,8,98);


// echo "{$numbers[0]} <br>";
// echo "{$numbers[1]} <br>";
// echo "{$numbers[2]} <br>";


// array_push($cars, "Mehran","Sonata");
// array_pop($cars);
// array_shift($cars);
array_splice($cars, 1,1);

// $reverse = array_reverse($numbers);
// sort($numbers);
// rsort($numbers);

// echo "array length: ". count($numbers). "<br>";

// foreach ($reverse as $value) {
//     echo "{$value} <br>";
// }
// foreach ($numbers as $value) {
//     echo "{$value} <br>";
// }

foreach ($cars as $value) {
    echo "{$value} <br>";
}





?>