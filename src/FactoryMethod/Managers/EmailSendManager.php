<?php

namespace Patterns\FactoryMethod\Managers;

use Patterns\FactoryMethod\Object\EmailObject;
use Patterns\FactoryMethod\Object\SenderObject;

class EmailSendManager extends SendManager
{

    public function getSenderObject(): SenderObject
    {
        return new EmailObject();
    }

    public function getSignature(): string
    {
        return 'Подпись для Email';
    }
}