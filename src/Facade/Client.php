<?php

namespace Patterns\Facade;

class Client
{
    public function openTransaction(string $bank, string $amount)
    {
        echo 'транзакция открыта';
        $this->transferModeny($amount);

    }

    private function transferModeny(string $amount)
    {
        echo 'Отправка '.$amount;
    }
}