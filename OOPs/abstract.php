
<?php

abstract class coffeeShop
{
    public $userName;
    public $totalPrice;
    public $quantity;
    public $coffeeName;
    public function buyCoffee(){}

}


class TalhaCoffeeShopCenter extends coffeeShop{

    public function __construct($userName, $totalPrice, $quantity, $coffeeName)
    {
        $this->userName = $userName;
        $this->totalPrice = $totalPrice;
        $this->quantity = $quantity;
        $this->coffeeName = $coffeeName;
    }

    function buyCoffee(){


        
        echo "$this->userName has bought $this->quantity $this->coffeeName coffee and his total bill: $this->totalPrice";



    }



    
    
}



if(isset($_POST['submit']))
{
    $userName = $_POST['userName'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $coffee = $_POST['coffee'];

    
    
    $firstPurchase = new TalhaCoffeeShopCenter($userName,  $price, $quantity, $coffee);
    $firstPurchase->buyCoffee();

    
}




    // $firstPurchase = new TalhaCoffeeShopCenter('Abeez', 950, 4, 'Alfredo');








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
    <form action="abstract.php" method="post">
        <input type="text" name="userName" placeholder="Enter your User Name">
        <input type="text" name="price" placeholder="Enter your Price">
        <input type="text" name="quantity" placeholder="Enter your Quantity">
        <input type="text" name="coffee" placeholder="Enter Coffee Name">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>