<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Post Method</title>
</head>
<body>
    <form action="getPost.php" method='post'>
        <label for="">Username</label>
        <input type="text" name= 'username' >
        <label for="">Password</label>
        <input type="password" name= 'password' >
        <input type="submit" value= 'Submit'>
    </form>







   
</body>
</html>

<?php
   
   $username = $_POST["username"] ?? '';
   $password = $_POST['password'] ?? '';


   echo "{$_POST["username"]}  <br>";
   echo $password. "<br>";


?>