<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator\Domain\Finder;

use Gorky\HexCli\Generator\AbstractGenerator;
use Gorky\HexCli\Generator\Generator;

class FinderGenerator extends AbstractGenerator implements Generator
{
    public function layerPath(): string
    {
        return 'Domain\Finder';
    }

    public function suffix(): string
    {
        return 'Finder';
    }

    public function sourceCode(string $name): string
    {
        return $this->generateFileContent(
            $name,
            Finder::class,
        );
    }
}