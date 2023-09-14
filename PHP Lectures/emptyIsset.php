<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>empty() & isset()</title>
</head>
<body>

    <!-- <form action="emptyIsset.php" method="post">
        <input type="text" name="username"> <br>
        <input type="text" name="password"> <br>

        <input type="submit" value="Submit" name="submit">

    </form> -->
    
    
    
    <!-- <form action="emptyIsset.php" method="post">
        <input type="radio" name="animal" value = "CAT"><label for="animal">CAT</label> <br>
        <input type="radio" name="animal" value = "HORSE"><label for="animal">HORSE</label> <br>
        <input type="radio" name="animal" value = "LION"><label for="animal">LION</label> <br>

        <input type="submit" value="Submit" name="submit">

    </form> -->
  
  
<!--   
    <form action="emptyIsset.php" method="post">
        <input type="checkbox" name="cat" value = "CAT"><label for="animal">CAT</label> <br>
        <input type="checkbox" name="horse" value = "HORSE"><label for="animal">HORSE</label> <br>
        <input type="checkbox" name="Lion" value = "LION"><label for="animal">LION</label> <br>

        <input type="submit" value="Submit" name="submit">

    </form> -->


    <!-- For ARRAY -->
    <form action="emptyIsset.php" method="post">
        <input type="checkbox" name="animal[]" value = "CAT"><label for="animal">CAT</label> <br>
        <input type="checkbox" name="animal[]" value = "HORSE"><label for="animal">HORSE</label> <br>
        <input type="checkbox" name="animal[]" value = "LION"><label for="animal">LION</label> <br>

        <input type="submit" value="Submit" name="submit">

    </form>




</body>
</html>

<?php 

// isset() -----> null
// empty() -----> null, undefined, not declared, 0,0.0,"0","",NULL,FALSE,array()



// $check = null;
// $check = "";
// $check;
// $check = array();
// $check = false;
// $check = "0";
// $check = 0;
// $check = 0.0;
// $check = 45;



// if(isset($check)){
//     echo "The value is true";
// }else{
//     echo "The value is false";
// }


// if(empty($check)){
//     echo "The value is true";
// }else{
//     echo "The value is false";
// }



    // if(isset($_POST["submit"])){
    //     foreach($_POST as $key => $value){
    //         echo "$key ===> $value <br>";
    //     }
    // }
  
  
    // if(isset($_POST["submit"])){
    //    if(empty($_POST["username"])){
    //        echo "Kindly enter Email";
    //     }elseif(empty($_POST["password"])){
    //         echo "Kindly enter Password";
    //     }else{
    //         echo "<h2>Welcome!</h2> <br> {$_POST['username']}";
    //     }
    // }


    
    // $animal = null;
    // if(isset($_POST["submit"])){

    //     if(isset($_POST["animal"])){
    //         $animal = $_POST["animal"];
    //     }
    //     if($animal === "CAT"){
    //         echo "$animal is in your house";
    //     }
    //     elseif($animal === "HORSE"){
    //         echo "$animal is in your house";
    //     }
    //     elseif($animal === "LION"){
    //         echo "$animal is in your house";
    //     }
    //     else{
    //         echo "Please select any animal";
    //     }

    // }



    // for RADIO BUTTON


        // if(isset($_POST["submit"])){
        //     if(isset($_POST["cat"])){
        //         echo "You like CAT <br>";
        //     }
        //     if(isset($_POST["horse"])){
        //         echo "You like HORSE <br>";
        //     }
        //     if(isset($_POST["Lion"])){
        //         echo "You like LION <br>";
        //     }
        // }


                // for ARRAY RADIO BUTTON


        if(isset($_POST["submit"])){
            if(isset($_POST["animal"])){
               
                foreach($_POST["animal"] as $key){
                    echo "$key <br>";
                }
            }
        
        }




?>