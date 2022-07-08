<?php

namespace Patterns\AbstractFactory\Importers;

use Patterns\AbstractFactory\Interfaces\Importers;

abstract class WordImproter implements Importers
{
    public function parce(string $path): array
    {
        return [
            'title' => '1.docx',
            'content' => 'dfsfgds dfggdfg df df'
        ];
    }

    abstract function import():bool;
}