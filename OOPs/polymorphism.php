

<?php


interface bank {
    public function __construct();
    public function yearlyCharges();
}

class MeezanBankAccount 
{
    public $accountHolder;
    public $accountNumber;
    public $amount;
    private $pincode;


    public function __construct($aH, $aN,$am, $pC)
    {
        $this->accountHolder = $aH;
        $this->accountNumber = $aN;
        $this->amount = $am;
        $this->pincode = $pC;
    }

     function yearlyCharges($charges)
    {
        $this->amount = $this->amount -10 - $charges;
    }




}
class HBLBankAccount extends MeezanBankAccount
{

     function yearlyCharges($charges)
    {
        $this->amount = $this->amount - $charges;
    }

}




    $asfar = new MeezanBankAccount('Asfar', 8732487847982, 230000, 8900);


    print_r($asfar);
    echo "<hr>";


    $asfar->yearlyCharges(6700);


    print_r($asfar);
    echo "<hr>";

    $zahid = new HBLBankAccount('Zahid', 4174317823498, 230000, 8911);


    print_r($zahid);
    echo "<hr>";


    $zahid->yearlyCharges(6700);


    print_r($zahid);
    echo "<hr>";









?>