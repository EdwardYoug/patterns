<?php

namespace Patterns\FactoryMethod\Objects;

abstract class SenderObject
{
    abstract public function send(string $message):bool;
}