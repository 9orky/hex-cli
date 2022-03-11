<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator\Domain\Repository;

use Gorky\HexCli\Generator\AbstractGenerator;
use Gorky\HexCli\Generator\Generator;

class RepositoryGenerator extends AbstractGenerator implements Generator
{
    public function layerPath(): string
    {
        return 'Domain\Repository';
    }

    public function suffix(): string
    {
        return 'Repository';
    }

    public function sourceCode(string $name): string
    {
        return $this->generateFileContent(
            $name,
            Repository::class,
        );
    }
}