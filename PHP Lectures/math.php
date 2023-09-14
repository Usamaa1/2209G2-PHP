<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Function</title>
</head>
<body>

    <form action="math.php" method="post">
        <label for="num1">Number 1</label>
        <input type="text" name="num1">
        <label for="num1">Number 2</label>
        <input type="text" name="num2">
        <label for="num1">Number 3</label>
        <input type="text" name="num3">
        <input type="submit" value="Submit" id="">
    </form>



</body>
</html>

<?php

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];


    // echo abs($num1);
    // echo round($num1);
    // echo floor($num1);
    // echo ceil($num1);
    // echo sqrt($num1);
    // echo pow($num1, $num2);
    // echo min($num1, $num2, $num3);
    // echo max($num1, $num2, $num3);
    // echo pi();
    echo rand(3,5);


    
?>


