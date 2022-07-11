<?php

require_once '../vendor/autoload.php';

use Patterns\AbstractFactory\Managers\ToDataBaseImporterManager;
use Patterns\ChainOfResponsibility\Application;
use Patterns\ChainOfResponsibility\Middleware\FirstMiddleware;
use Patterns\ChainOfResponsibility\Middleware\SecondMiddleware;
use Patterns\ChainOfResponsibility\Middleware\ThirdMiddleware;
use Patterns\FactoryMethod\Managers\EmailSendManager;
use Patterns\FactoryMethod\Managers\TelegramSendManager;
use Patterns\Singleton\DBConnection;

/**
 * Singleton
 */
echo '<h2>Singleton</h2>';
$db = DBConnection::getInstance();
$db->setDriver('MySQL');
$db2 = DBConnection::getInstance();
echo '<br> result: '.$db2->getDriver() . '<p><img src="/images/singleton.bmp"></p>';

/**
 * FactoryMethod
 */
echo '<h2>FactoryMethod</h2>';
$fm = new TelegramSendManager();
$fm->getSenderObject()->send($fm->getSignature());
echo '<br>';
$fm2 = new EmailSendManager();
$fm2->getSenderObject()->send($fm2->getSignature());
echo '<p><img src="/images/factorymethod.jpg"></p>';

/**
 * AbstractFactory
 */
echo '<h2>AbstractFactory</h2>';
echo '<br>';
$af = new ToDataBaseImporterManager();

$af->getExcelImporter()->parce('/../1.xlsx')->postProcces('Добавить что то')->import();
$af->getExcelImporter()->parce('1.xlsx')->import();
echo '<p><img src="/images/abstractFactory.jpg"></p>';

/**
 * ChainOfResponsibility
 */
echo '<h2>Цепочка обязанностей</h2>';
echo '<br>';

$application = new Application($_REQUEST);
$application->addMiddleware(
    new FirstMiddleware(),
    new SecondMiddleware(),
    new ThirdMiddleware(),
);

$application->handle();