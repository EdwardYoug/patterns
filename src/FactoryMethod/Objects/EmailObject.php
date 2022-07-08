<?php

namespace Patterns\FactoryMethod\Object;

class EmailObject extends SenderObject
{

    public function send(string $message): bool
    {
        echo $message;
        return true;
    }
}