<?php

namespace Patterns\AbstractFactory\Importers;

class XlsxToEmail extends ExcelImporter
{

    function import(): bool
    {
        echo 'Импортнули xls на мыло';
        return true;
    }
}