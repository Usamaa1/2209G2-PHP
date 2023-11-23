<?php 

// Multilevel inheritance
// Multiple inheritance




class BankAccount 
{
    public $accountHolder;
    public $accountNumber;
    protected $amount;
    private $pincode;


    public function __construct($accountHolder, $accountNumber, $amount, $pincode)
    {
        $this->accountHolder = $accountHolder;
        $this->accountNumber = $accountNumber;
        $this->amount = $amount;
        $this->pincode = $pincode;
    }


    public function deposit($depositAmount)
    {
        $this->amount += $depositAmount;
    }



}


class MeezanBank extends BankAccount
{

    public function withDraw($withDrawAmount)
    {
        $this->amount -= $withDrawAmount;
    }

}
class BankAlfalah extends BankAccount
{

}















    $zahidAccount1 = new MeezanBank('Zahid Khan',78947238748173, 34000, 3212);

    print_r($zahidAccount1); 

    $zahidAccount1->deposit(500);

    echo "<hr>";


    $zahidAccount1->withDraw(80000);

    print_r($zahidAccount1); 

    echo "<hr>";
    echo "<hr>";



    $zahidAccount2 = new BankAlfalah('Zahid Khan',874187872347832, 100000, 2343);

    print_r($zahidAccount2); 

    $zahidAccount2->deposit(20000);
    
    echo "<hr>";
    
    // $zahidAccount2->withDrawAmount(80000);


    print_r($zahidAccount2); 










?>