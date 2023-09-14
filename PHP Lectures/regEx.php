<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expression in PHP</title>
</head>
<body>
    <h1>Form Validation</h1>
    <form action="regEx.php" method="post">
        <label for="">User Name: </label><br>
        <input type="text" name="username" id="username"><br>
        <label for="">Email: </label><br>
        <input type="email" name="email" id="email"><br>
        <label for="">Password: </label><br>
        <input type="password" name="password" id="email"><br>
        <label for="">Phone: </label><br>
        <input type="text" name="phone" id="age"><br>
        <input type="submit" name= "submit" value="SignUp">
    </form>


    <?php 
        @$email = $_POST["email"];
        @$password = $_POST["password"];
        @$phone = $_POST["phone"];
        $email_pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
        $password_pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$%^&+=!]).{8,}$/";;
        $phone_pattern = "/^\d{3}-\d{3}-\d{4}$/";

        if(isset($_POST["submit"])){
            if (preg_match($email_pattern, $email)) {
                echo "Valid email address! <br>";
            } else {
                echo "Invalid email address. <br>";
            }
            if (preg_match($password_pattern, $password)) {
                echo "Valid Password! <br>";
            } else {
                echo "Invalid Password. <br>";
            }
            if (preg_match($phone_pattern, $phone)) {
                echo "Valid Phone! <br>";
            } else {
                echo "Invalid Phone. <br>";
            }
        }
        
       
        
    ?>




</body>
</html>