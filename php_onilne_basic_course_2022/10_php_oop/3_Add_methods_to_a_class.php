<?php 
class BankAccount {
  // Add properties to a class
  public $balance;
  public $accountNumber; 
  // Add methods to a class
  public function deposit($amount) {
    $this->balance += $amount;
  }
  public function withdraw($amount) {
    $this->balance -= $amount;
  }
}

//create object
$account = new BankAccount();
$account->balance = 1000; // 
$account->accountNumber = '1';
echo  "Your Balance is : ". $account->balance;
echo '<hr>';
echo "Your Account Number is : ". $account->accountNumber;
echo '<hr>';
$account->deposit(500);
echo  "Your Balance is : ". $account->balance;
echo '<hr>';
$account->withdraw(100);
echo  "Your Balance is : ". $account->balance;
?>