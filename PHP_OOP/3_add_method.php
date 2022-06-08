<?php 
class BankAccount {
 // add properties
 public $balance;
 public $accountNumber;

 // add methods
 public function desposit($amount) {
   $this->balance += $amount;
 }
 public function withdraw($amount) {
    $this->balance -= $amount;
  }
}

// creating the opject
$account = new BankAccount();
$account->balance = 100;
$account->accountNumber = 1;
echo "your account balance is: " . $account->balance;
echo "<hr>";
echo "your account number is: " . $account->accountNumber;

echo "<hr>";
$account->deposit(100);
echo "you account balance is: " . $account->balance;
echo "<hr>";
$account->withdraw(50);
echo "your accoount balance is: " . $account->balance;
?>