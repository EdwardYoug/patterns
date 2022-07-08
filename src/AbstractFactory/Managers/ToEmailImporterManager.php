<?php

namespace Patterns\AbstractFactory\Managers;

use Patterns\AbstractFactory\Importers\ExcelImporter;
use Patterns\AbstractFactory\Importers\JsonImporter;
use Patterns\AbstractFactory\Importers\WordImproter;

class ToEmailImporterManager extends ImporterManager
{

    function getName(): string
    {
        // TODO: Implement getName() method.
    }

    function getExcelImporter(): ExcelImporter
    {
        // TODO: Implement getExcelImporter() method.
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