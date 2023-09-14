<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <h1>Form Validation</h1>
    <form action="formValidation.php" method="post">
        <label for="">User Name: </label><br>
        <input type="text" name="username" id="username"><br>
        <label for="">Email: </label><br>
        <input type="email" name="email" id="email"><br>
        <label for="">Age: </label><br>
        <input type="text" name="age" id="age"><br>
        <input type="submit" name= "submit" value="SignUp">
    </form>





    <?php
    // for errors
        
        // if(isset($_POST['submit'])){
        //     $username = $_POST['username'];
        //     echo $username;

        // }
        
        
        
        // actual data Validation
        
        if(isset($_POST['submit'])){
            
            // -----------------For Sanitizing DATA--------------------------
            // $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
            // $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_STRING); //=====> Depreciated
            // $age = filter_input(INPUT_POST,"age", FILTER_SANITIZE_NUMBER_INT);

            // -----------------For Validation DATA--------------------------
            $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
            $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
            
            // echo "This is : $age";
            
            if(empty($age)){
                echo "Invalid age, Kindly enter valid number <br>";
                
            }else{
                echo "Thanks for submition <br>";

            }
            
            if(empty($email)){
                echo "Invalid email, Kindly enter valid email";
                
            }else{
                echo "Thanks for submition";

            }
            
            






        }




    ?>

    <!-- <script>alert("Hello")</script> -->





</body>
</html>