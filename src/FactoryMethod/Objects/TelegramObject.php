<?php

namespace Patterns\FactoryMethod\Object;

class TelegramObject extends SenderObject
{

    public function send(string $message): bool
    {
        echo $message;
        return true;
    }
}