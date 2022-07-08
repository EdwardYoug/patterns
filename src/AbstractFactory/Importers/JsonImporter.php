<?php

namespace Patterns\AbstractFactory\Importers;

use Patterns\AbstractFactory\Interfaces\Importers;

abstract class JsonImporter implements Importers
{
    public function parce(string $path): array
    {
        return [
            'title' => '1.json',
            'content' => 'dfgdfdf gdf gdf34535 34 fgdfgfd'
        ];
    }

    abstract function import():bool;
}