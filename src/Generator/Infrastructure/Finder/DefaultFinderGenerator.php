<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator\Infrastructure\Finder;

use Gorky\HexCli\Generator\AbstractGenerator;
use Gorky\HexCli\Generator\Generator;

class DefaultFinderGenerator extends AbstractGenerator implements Generator
{
    public function layerPath(): string
    {
        return 'Infrastructure\Finder';
    }

    public function suffix(): string
    {
        return 'Finder';
    }

    public function sourceCode(string $name): string
    {
        return $this->generateFileContent(
            $name,
            DefaultFinder::class,
        );
    }
}