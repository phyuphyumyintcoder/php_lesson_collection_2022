<?php
class BankAcount {
 // Add properties to a class
 public $balance;
 public $accountNumber;
}

//create object
$account = new BankAcount();
$account->balance = 100;
$account->accountNumber = '1';
echo "Your Balance is :". $account->balance;
echo '<hr>';
echo "Your Account Number is : ". $account->accountNumber;
?>