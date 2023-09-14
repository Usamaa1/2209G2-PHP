<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if Statement</title>
</head>
<body>


    <form action="forLoop.php" method="post">
        <label for="">Count: </label>
        <input type="text" name= "count">
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>

<?php

    $count = $_POST["count"];
   

    // for($i = 1; $i <= $count; $i++){
    //     echo "{$i}  <br>";
    // }

    for($i = $count; $i >= 1; $i--){
        echo "{$i}  <br>";
    }




?>

