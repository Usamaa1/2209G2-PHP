
<!-- Access Modifier -->

<!-- Private -->
<!-- Public -->
<!-- Protected -->


<?php

class BankAccount 
{
   public $accountHolder;
   public $accountNumber;
   private $pincode;

   static $bankName = 'Meezan Bank';


    public function __construct($aH, $aN, $pC)
    {
        $this->accountHolder = $aH;
        $this->accountNumber = $aN;
        $this->pincode = $pC;
    }

    static function yearlyDeduction()
    {
        echo "Your yearly ATM card charges would be deducted 20%";
    }






}


    $asfarAccount = new BankAccount('Asfar Ahmed',7823748723, 3456);

    // echo $asfarAccount->pincode;
    print_r($asfarAccount);
    echo "<br>";    
    
    echo $asfarAccount->accountNumber;
    echo "<br>";    
    BankAccount::yearlyDeduction();













?>