<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator\Infrastructure\Repository;

use Gorky\HexCli\Generator\AbstractGenerator;
use Gorky\HexCli\Generator\Generator;

class DefaultRepositoryGenerator extends AbstractGenerator implements Generator
{
    public function layerPath(): string
    {
        return 'Infrastructure\Repository';
    }

    public function suffix(): string
    {
        return 'Repository';
    }

    public function sourceCode(string $name): string
    {
        return $this->generateFileContent(
            $name,
            DefaultRepository::class,
        );
    }
}