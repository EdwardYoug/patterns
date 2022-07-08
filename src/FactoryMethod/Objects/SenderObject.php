<?php

namespace Patterns\FactoryMethod\Object;

abstract class SenderObject
{
    abstract public function send(string $message):bool;
}