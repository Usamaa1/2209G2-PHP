<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if Statement</title>
</head>
<body>


    <form action="if_Statement.php" method="post">
        <label for="">AGE: </label>
        <input type="text" name= "age">
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>

<?php

    $age = $_POST["age"];
    // $age = 0;
    // echo is_numeric($age);

    // if (is_numeric($age) >= 18) {
    //     echo "You can drive";
    // }
    // elseif(is_numeric($age) < 18){
        
    //     echo "You can not drive";
    // }
    // else{
    //     echo "Kindly enter valide age";

       
    // }
    




// $age = "fjsdfj";
// echo is_numeric($age);

// if ($age >= 18) {
//     echo "You can drive";
// }
// elseif ($age < 18) {
//     echo "You can not drive";
// }
// else {
//     echo "Kindly enter a valid age";
// }












        // Logical Operators

        // AND

    // if(is_numeric($age) && $age >=18 && $age <= 100){
    //     echo "You can drive";
    // }else{
    //     echo "You can not drive";
    // }

        // OR

        // if(is_numeric($age) && $age >=18 || $age <= 100){
        //     echo "You can drive";
        // }else{
        //     echo "You can not drive";
        // }

        // !

        if($age != 18){
            echo "You can drive";
        }else{
            echo "You can not drive";
        }







?>

