<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if Statement</title>
</head>

<body>


    <form action="whileLoop.php" method="post">
        <input type="submit" value="Stop" name="stop">
    </form>

</body>

</html>

<?php

$i = 0;
$condition = true;


while ($condition) {

    if (isset($_POST['stop'])) {
        $condition = false;
    } else {


        $i++;
        echo "{$i} <br>";
    }
}




?>