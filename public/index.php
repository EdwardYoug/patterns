<?php

require_once '../vendor/autoload.php';

use Patterns\Singleton\DBConnection;

/**
 * Singleton
 */

$db = DBConnection::getInstance();
$db->setDriver('MySQL');
$db2 = DBConnection::getInstance();
echo $db2->getDriver();
