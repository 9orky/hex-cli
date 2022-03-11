<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator\Ui\Response;

use Gorky\HexCli\Generator\AbstractGenerator;
use Gorky\HexCli\Generator\Generator;

class ViewGenerator extends AbstractGenerator implements Generator
{
    public function layerPath(): string
    {
        return 'Ui\Response';
    }

    public function suffix(): string
    {
        return 'View';
    }

    public function sourceCode(string $name): string
    {
        return $this->generateFileContent(
            $name,
            View::class,
        );
    }
}