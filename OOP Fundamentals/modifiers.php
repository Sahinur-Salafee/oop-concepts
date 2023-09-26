<?php

class Fund {

    private $fund;
    function __construct($initialFund = 0)
    {
        $this->fund = $initialFund;
        echo '<br>';
    }

    function addFund($money) {
        $this->fund += $money;
        echo '<br>';
    }

    function deductFund($money) {
        $this->fund -= $money;
        echo '<br>';
    }

    function getTotal() {
        echo "Total fund is {$this->fund}";
    }
}

$ourFund = new Fund(100); // set fund
$ourFund->getTotal();
// get results
$ourFund->addFund(50);
$ourFund->getTotal();
$ourFund->deductFund(20);
$ourFund->getTotal();