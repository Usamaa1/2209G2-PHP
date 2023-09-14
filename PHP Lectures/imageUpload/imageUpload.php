<?php include "config.php" ?>


<?php

if (isset($_POST['submit'])) {
    $productName = $_POST['productName'];

    $image = $_FILES['image'];
    $imageName = $_FILES['image']['name'];
    $imageTempName = $_FILES['image']['tmp_name'];
    $imageSize = $_FILES['image']['size'];


    echo "<br> $imageName <br>";
    echo "<br> $imageTempName <br>";
    echo "<br> $imageSize <br>";

    echo "<pre>";
    print_r($image);
    echo "</pre>";



    $imageExtension = explode(".",$imageName);
    print_r($imageExtension);
    $imageExtension = strtolower(end($imageExtension));

    echo "<br> $imageExtension <br>";



    $uniqueName = uniqid();

    $uniqueName .= ".".$imageExtension;

    // $a += "hello";

    echo "$uniqueName";



    // $validExtension = ['jpg','jpeg','png'];
    
    // if(in_array($imageExtension,$validExtension))
    // {
        //     move_uploaded_file($imageTempName, "images/" . $uniqueName);
        // }
        // else
        // {
            //     echo "<script>alert('Kindly upload valid Image')</script>";
            // }
            


        
        if($imageSize > 5000000)
        {
            echo "<script>alert('Image size is too large')</script>";
        }else
        {
            


            $imageInsertQuery = "INSERT INTO `imageupload`(`name`, `image`) VALUES (:name,:image)";

            $imageInsertPrepare = $connection->prepare($imageInsertQuery);

            $imageInsertPrepare->bindParam(':name',$productName,PDO::PARAM_STR);
            $imageInsertPrepare->bindParam(':image',$uniqueName,PDO::PARAM_STR);
            $imageInsertPrepare->execute();

            move_uploaded_file($imageTempName, "images/" . $uniqueName);




        }
        

    




















}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="imageUpload.php" method="post" enctype="multipart/form-data">
        <label for="">Product Name</label>
        <input type="text" name="productName">
        <label for="">Upload Image</label>
        <input type="file" name="image" accept="image/jpg, image/png, image/jpeg">
        <input type="submit" name="submit" value="Upload Image">
    </form>

    <!-- <img src="images/yifu-wu-jmFvtYA3qgo-unsplash.jpg" width="100" alt=""> -->
</body>

</html>