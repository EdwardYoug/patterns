<?php

namespace Patterns\Facade;

class Bank
{
    public function log($bank, $amount)
    {
        echo 'Перевод из '.$bank. '- '.$amount. 'руб.';
    }
}