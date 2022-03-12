<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator\Ui\Request;

use Gorky\HexCli\Generator\AbstractGenerator;
use Gorky\HexCli\Generator\Generator;
use Gorky\HexCli\Generator\Ui\UiLayer;

class RequestGenerator extends AbstractGenerator implements Generator
{
    public function layerPath(): string
    {
        return UiLayer::LAYER_NAME . '\Request';
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