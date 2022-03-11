<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator\Domain\Id;

use Gorky\HexCli\Generator\AbstractGenerator;
use Gorky\HexCli\Generator\Generator;

class IdValueGenerator extends AbstractGenerator implements Generator
{
    public function layerPath(): string
    {
        return 'Domain\Id';
    }

    public function suffix(): string
    {
        return 'Id';
    }

    public function sourceCode(string $name): string
    {
        return $this->generateFileContent(
            $name,
            IdValue::class,
        );
    }
}