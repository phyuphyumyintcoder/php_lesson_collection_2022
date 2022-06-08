<?php 

class BankAccount
{
 public $accountNumber;
 public $balance;

 public function _construct($accountNumber)
 {
  $this->accountNumber =  $accountNumber;
  //$this->balance = balance;
  //echo $this;
 }
 public function get_account() {
    return $this->accountNumber;
 }
}
$object = new BankAccount(1);
 echo $object->get_account();
?>