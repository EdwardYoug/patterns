<?php

namespace Patterns\AbstractFactory\Importers;


class XlsxToDb extends ExcelImporter
{

    public function postProcces(string $param): ExcelImporter
    {
        return $this;
    }

    function import(): bool
    {
        echo 'Импортнули Xlsx в БД ' . $this->adress;
        return true;
    }
}