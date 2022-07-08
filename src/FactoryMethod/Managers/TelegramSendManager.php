<?php

namespace Patterns\FactoryMethod\Managers;

use Patterns\FactoryMethod\Object\SenderObject;
use Patterns\FactoryMethod\Object\TelegramObject;

class TelegramSendManager extends SendManager
{

    public function getSenderObject(): SenderObject
    {
        return new TelegramObject();
    }

    public function getSignature(): string
    {
        return 'Подпись для Телеграм';
    }
}