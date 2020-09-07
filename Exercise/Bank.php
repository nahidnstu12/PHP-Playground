<?php
// bank(accno,name,balane)
// create an account for user
// checkBalance,depositeBalance,DeductAmount


class Bank {
    private $accno;
    private $name;
    private $balance;

   
    public function __construct($acc="",$bal="",$name="")
    {
        $this->accno = $acc;
        $this->balance = $bal;
        $this->name = $name;
    }
    function getBalance(){
        return $this->balance;
    }
    public function depositeAmount($amt){
        $this->balance += $amt;
        return $this;
    }
    public function deductAmount($amt){
        $ck = $this->balance-$amt;
        if($this->balance < $amt){
            echo "Your requested amount is bigger than your balance".PHP_EOL;
            return $this;
        }
        else if($this->balance < 100 || $ck < 100){
            echo "Your balance is shortage".PHP_EOL;
            return $this;
        }else{
        $this->balance -= $amt;
        return $this;
    }
    }
    public function checkBalance(){
        echo "$this->name's amount: ".$this->balance .PHP_EOL;
        return $this;
    }
}

class Branch extends Bank {
    
}

$user1 = new Bank("123",500,"Nahid");
// $user1->name ="Nahid";
// $user1->balance = 500;

$user1->deductAmount(200)->checkBalance();
// $user1->checkBalance();
$user1->deductAmount(10)->checkBalance();
// $user1->checkBalance();
$user1->deductAmount(10)->checkBalance();
// 
echo $user1->depositeAmount(100)->getBalance();
// $user1->checkBalance();


?>