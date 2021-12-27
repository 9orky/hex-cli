<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator\Domain\Entity;

use Gorky\HexCli\Generator\AbstractGenerator;
use Gorky\HexCli\Generator\Generator;

class EntityGenerator extends AbstractGenerator implements Generator
{
    public function layerPath(): string
    {
        return 'Domain\Entity';
    }

    public function suffix(): string
    {
        return '';
    }

    public function sourceCode(string $name): string
    {
        return $this->generateFileContent(
            $name,
            Entity::class,
        );
    }
}