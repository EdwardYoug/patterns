<?php

namespace Patterns\FactoryMethod\Managers;

use Patterns\FactoryMethod\Objects\EmailObject;
use Patterns\FactoryMethod\Objects\SenderObject;

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