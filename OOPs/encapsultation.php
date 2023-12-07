

<?php 

class userBankAccount 
{
    private $userName;
    private $pinCode;
    private $password;
    private $ATMNumber;

    public function __construct($username, $pinCode, $password, $ATMNumber)
    {
        $this->userName = $username;
        $this->pinCode = $pinCode;
        $this->password = $password;
        $this->ATMNumber = $ATMNumber;
    }

    public function setPassword($newPassword)
    {
        $this->password = $newPassword;
    }
    public function getPassword()
    {
        echo $this->password;
    }



}





    $asfar = new userBankAccount('AsfarBahadur',6786,'asfar123',897324878327487328);

    var_dump($asfar);
    // echo $asfar->userName;
    
    echo "<hr>";
    
    echo $asfar->setPassword('kfsdjakfdasj');
    
    
    
    var_dump($asfar);
    echo "<hr>";
    
    $asfar->getPassword();







?>