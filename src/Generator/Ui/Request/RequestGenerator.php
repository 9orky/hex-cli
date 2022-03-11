<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator\Ui\Request;

use Gorky\HexCli\Generator\AbstractGenerator;
use Gorky\HexCli\Generator\Generator;

class RequestGenerator extends AbstractGenerator implements Generator
{
    public function layerPath(): string
    {
        return 'Ui\Request';
    }

    public function suffix(): string
    {
        return 'Request';
    }

    public function sourceCode(string $name): string
    {
        return $this->generateFileContent(
            $name,
            Request::class,
        );
    }
}