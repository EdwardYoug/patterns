<?php

namespace Patterns\AbstractFactory\Importers;

use Patterns\AbstractFactory\Interfaces\Importers;

abstract class ExcelImporter implements Importers
{
    protected $adress;

    public function __construct(string $adress)
    {
        $this->adress = $adress;
    }

    public function parce(string $path): Importers
    {
        $this->content = [
            'title' => '1.xlsx',
            'content' => 'bla bla bla'
        ];
        return $this;
    }


    abstract function import(): bool;
}