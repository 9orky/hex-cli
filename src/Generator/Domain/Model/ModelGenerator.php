<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator\Domain\Model;

use Gorky\HexCli\Generator\AbstractGenerator;
use Gorky\HexCli\Generator\Generator;

class ModelGenerator extends AbstractGenerator implements Generator
{
    public function layerPath(): string
    {
        return 'Domain\Model';
    }

    public function suffix(): string
    {
        return 'Model';
    }

    public function sourceCode(string $name): string
    {
        return $this->generateFileContent(
            $name,
            Model::class,
        );
    }
}