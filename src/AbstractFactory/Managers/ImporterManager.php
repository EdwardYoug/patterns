<?php

namespace Patterns\AbstractFactory\Managers;

use Patterns\AbstractFactory\Importers\ExcelImporter;
use Patterns\AbstractFactory\Importers\JsonImporter;
use Patterns\AbstractFactory\Importers\WordImproter;

abstract class ImporterManager
{
    abstract function getName(): string;

    abstract function getExcelImporter(): ExcelImporter;

    abstract function getWordImporter():WordImproter;

    abstract function getJsonImporter(): JsonImporter;
}