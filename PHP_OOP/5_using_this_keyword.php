<?php
class BankAccount { 
    public $accountNumber;
    public $balance;

    public function deposit($amount) { 
        if($amount > 0) { 
            $this->balance += $amount;
            echo "Deposit of $amount successful.New balance is $this->balance";
        } else { 
            echo "Deposit failed. Invalid amount.";
        }
    }
    public function withdraw($amount) { 
        if($amount > 0 && $amount<= $this->balance) { 
            $this->balance -= $amount;
            echo "Withdrawal of $amount sucdessful. New balance is $this->balance";
        } else { 
            echo "Withdrawal failed. Invalid amount or insufficient funds.";
        }
    }
}
$account = new BankAccount();
$account->accountNumber = 1;
$account->balance = 100;
echo "Account number:$account->accountNumber";
echo "<br>";
echo "Balance: $account->balance";
$account->deposit(100);
$account->deposit(200);
$account->deposit(300);
echo "<br>";
$account->withdraw(50);
echo "<br>;"
?>