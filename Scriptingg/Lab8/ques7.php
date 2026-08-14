<?php
class BankAccount
{
    private $balance = 0;

    function deposit($amount)
    {
        $this->balance += $amount;
        echo "Deposited: Rs. $amount <br>";
    }

    function withdraw($amount)
    {
        if ($amount <= $this->balance)
        {
            $this->balance -= $amount;
            echo "Withdrawn: Rs. $amount <br>";
        }
        else
        {
            echo "Insufficient Balance<br>";
        }
    }

    function getBalance()
    {
        echo "Current Balance: Rs. $this->balance";
    }
}

$acc = new BankAccount();

$acc->deposit(20000);
$acc->withdraw(5000);
$acc->getBalance();
?>