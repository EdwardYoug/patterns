<?php

namespace Patterns\FactoryMethod\Objects;

use Patterns\FactoryMethod\Objects\SenderObject;

class TelegramObject extends SenderObject
{

    public function send(string $message): bool
    {
        echo $message;
        return true;
    }
}