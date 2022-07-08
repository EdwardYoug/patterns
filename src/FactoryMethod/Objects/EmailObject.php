<?php

namespace Patterns\FactoryMethod\Objects;

class EmailObject extends SenderObject
{

    public function send(string $message): bool
    {
        echo $message;
        return true;
    }
}