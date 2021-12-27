<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator\Application\Command;

use Gorky\HexCli\Generator\AbstractGenerator;
use Gorky\HexCli\Generator\Generator;

class CommandGenerator extends AbstractGenerator implements Generator
{
    public function layerPath(): string
    {
        return 'Application\Command';
    }

    public function suffix(): string
    {
        return 'Command';
    }

    public function sourceCode(string $name): string
    {
        return $this->generateFileContent(
            $name,
            Command::class,
        );
    }
}