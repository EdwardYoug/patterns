<?php

namespace Patterns\FactoryMethod\Managers;

use Patterns\FactoryMethod\Objects\SenderObject;

abstract class SendManager
{
    abstract public function getSenderObject(): SenderObject;

    abstract public function getSignature(): string;
}