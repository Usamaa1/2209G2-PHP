<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if Statement</title>
</head>
<body>


    <form action="switchStatement.php" method="post">
        <label for="">GRADE: </label>
        <input type="text" name= "grade">
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>

<?php

    $grade = $_POST["grade"];
   


    switch($grade){
        case "A":
            echo "You did great";
            break;
        case "B":
            echo "You did good";
            break;
        case "C":
            echo "You did okay";
            break;
        case "D":
            echo "You did poorly";
            break;
        case "F":
            echo "Sorry you Failed";
            break;
        default:
            echo "{$grade} is not valid";
            
    }






?>

