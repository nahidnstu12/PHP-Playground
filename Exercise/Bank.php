<?php
// bank(accno,name,balane)
// create an account for user
// checkBalance,depositeBalance,DeductAmount
// can't deduct upto 100$
// Branch && customer class added


class Bank {

    protected $bankName;
   
    public function __construct($name="")
    {
        $this->bankName = $name;
    }
    
}

class Branch extends Bank {
    protected $type;
    protected $branchName;
    protected $balance;

    function __construct($type="",$name="",Bank $bank)
    {
        $this->type = $type;
        $this->branchName = $name;
        $this->bankName = $bank->bankName;
    }
    function getType(){
        if($this->type == true){
            echo "This $this->branchName branch is Online".PHP_EOL;
        }else{
            echo "This $this->branchName branch is Offline".PHP_EOL;
        }
    }
    
}

class Customer extends Branch{
    protected $accno;
    protected $balance;

    function __construct($accno='',$balance='',Branch $branch1)
    {
        $this->accno = $accno;
        $this->balance = $balance;
        $this->branchName = $branch1->branchName;
        $this->bankName = $branch1->bankName;
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


    function displayInfo(){
        echo "BankName: $this->bankName  BranchName: $this->branchName  Customer's Account: $this->accno  Balance: $this->balance" .PHP_EOL;
    }

}

$bank1 = new Bank("ABS Bank");
$branch1 = new Branch(true,"Noakhali",$bank1);
$bank2 = new Bank("IOS Bank");
$branch2 = new Branch(true,"Senbag",$bank2);
$branch3 = new Branch(false,"Senbag",$bank1);
$user1 = new Customer("123",500,$branch1);
$user2 = new Customer("133",700,$branch1);
$user3 = new Customer("143",200,$branch2);
$user4 = new Customer("153",800,$branch3);

$user1->depositeAmount(150);
$user1->displayInfo();
// $branch1->getType();
$user1->deductAmount(25);
$user1->displayInfo();

// $user2->displayInfo();
// $branch2->getType();

// $user3->displayInfo();
// $branch3->getType();

// $user4->displayInfo();


// $user1->name ="Nahid";
// $user1->balance = 500;

// $user1->deductAmount(200)->checkBalance();
// // $user1->checkBalance();
// $user1->deductAmount(10)->checkBalance();
// // $user1->checkBalance();
// $user1->deductAmount(10)->checkBalance();
// // 
// echo $user1->depositeAmount(100)->getBalance();
// $user1->checkBalance();


?>