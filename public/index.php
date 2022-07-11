<?php

require_once '../vendor/autoload.php';

use Patterns\AbstractFactory\Managers\ToDataBaseImporterManager;
use Patterns\Builder\Builders\BlogPostBuilder;
use Patterns\ChainOfResponsibility\Application;
use Patterns\ChainOfResponsibility\Middleware\FirstMiddleware;
use Patterns\ChainOfResponsibility\Middleware\SecondMiddleware;
use Patterns\ChainOfResponsibility\Middleware\ThirdMiddleware;
use Patterns\Facade\Operator;
use Patterns\FactoryMethod\Managers\EmailSendManager;
use Patterns\FactoryMethod\Managers\TelegramSendManager;
use Patterns\Observer\Observable;
use Patterns\Observer\Observer;
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

$af
    ->getExcelImporter()
    ->parce('/../1.xlsx')
    ->postProcces('Добавить что то')
    ->import();
$af
    ->getExcelImporter()
    ->parce('1.xlsx')
    ->import();
echo '<p><img src="/images/abstractFactory.jpg"></p>';

/**
 * ChainOfResponsibility
 */
echo '<h2>Цепочка обязанностей</h2>';
echo '<br>';
echo '<p><img src="/images/ChainOfResponsibility.jpg"></p><br>';
$application = new Application($_REQUEST);
$application->addMiddleware(
    new FirstMiddleware(),
    new SecondMiddleware(),
    new ThirdMiddleware(),
);

$application->handle();

/**
 * Builder
 */
echo '<h2>Построитель</h2>';
echo '<br>';
echo '<p><img src="/images/builder.jpg"></p><br>';

$builder = new BlogPostBuilder();
$blogPost = $builder
    ->create()
    ->setTitle('Название')
    ->setBody('Тело')
    ->setCategories([
        'Категория 1',
        'Категория 2',
    ])
    ->setTags([
        'Тэг 1',
        'Тег 2',
    ])
    ->get();

echo $blogPost->getTitle();

/**
 * Фасад
 */
echo '<h2>Фасад</h2>';
echo '<br>';
echo '<p><img src="/images/facade.jpg"></p><br>';

$facade = new Operator('tinkoff');
$facade->sendMoney('541');

echo '<h2>Наблюдатель</h2>';
echo '<br>';
echo '<p><img src="/images/observer.jpg"></p><br>';
$observable = new Observable();
$observable->addObserver(new Observer());
$observable->notifyObservers();