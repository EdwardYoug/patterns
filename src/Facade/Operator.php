<?php

namespace Patterns\Facade;

class Operator
{

    private string $bank;

    public function __construct(string $bank)
    {
        $this->bank = $bank;
    }

    public function sendMoney(string $amount)
    {
        $client = new Client();
        $client->openTransaction($this->bank, $amount);

        $bank = new Bank();
        $bank->log($this->bank,$amount);
    }
}