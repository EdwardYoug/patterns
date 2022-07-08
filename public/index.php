<?php

require_once '../vendor/autoload.php';

use Patterns\FactoryMethod\Managers\EmailSendManager;
use Patterns\FactoryMethod\Managers\TelegramSendManager;
use Patterns\Singleton\DBConnection;

/**
 * Singleton
 */

$db = DBConnection::getInstance();
$db->setDriver('MySQL');
$db2 = DBConnection::getInstance();
echo $db2->getDriver() . '<p><img src="/images/singleton.bmp"></p>';

/**
 * FactoryMethod
 */

$fm = new TelegramSendManager();
$fm->getSenderObject()->send($fm->getSignature());

$fm2 = new EmailSendManager();
$fm2->getSenderObject()->send($fm2->getSignature());
