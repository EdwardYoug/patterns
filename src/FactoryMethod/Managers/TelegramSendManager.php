<?php

namespace Patterns\FactoryMethod\Managers;

use Patterns\FactoryMethod\Objects\SenderObject;
use Patterns\FactoryMethod\Objects\TelegramObject;

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