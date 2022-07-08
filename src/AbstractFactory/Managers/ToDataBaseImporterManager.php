<?php

namespace Patterns\AbstractFactory\Managers;

use Patterns\AbstractFactory\Importers\ExcelImporter;
use Patterns\AbstractFactory\Importers\JsonImporter;
use Patterns\AbstractFactory\Importers\XlsxToDb;
use Patterns\AbstractFactory\Importers\WordImproter;

class ToDataBaseImporterManager extends ImporterManager
{

    function getName(): string
    {
        return 'Импорт в базу данных';
    }

    function getExcelImporter(): ExcelImporter
    {
        $adress = '127.0.0.1';
        return new XlsxToDb($adress);
    }

    function getWordImporter(): WordImproter
    {
        // TODO: Implement getWordImporter() method.
    }

    function getJsonImporter(): JsonImporter
    {
        // TODO: Implement getJsonImporter() method.
    }
}