<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator\Ui\Response;

use Gorky\HexCli\Generator\AbstractGenerator;
use Gorky\HexCli\Generator\Generator;
use Gorky\HexCli\Generator\Ui\UiLayer;

class ViewGenerator extends AbstractGenerator implements Generator
{
    public function layerPath(): string
    {
        return UiLayer::LAYER_NAME . '\Response';
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