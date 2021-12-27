<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator\Application\Query;

use Gorky\HexCli\Generator\AbstractGenerator;
use Gorky\HexCli\Generator\Generator;

class QueryGenerator extends AbstractGenerator implements Generator
{
    public function layerPath(): string
    {
        return 'Application\Query';
    }

    public function suffix(): string
    {
        return 'Query';
    }

    public function sourceCode(string $name): string
    {
        return $this->generateFileContent(
            $name,
            Query::class,
        );
    }
}