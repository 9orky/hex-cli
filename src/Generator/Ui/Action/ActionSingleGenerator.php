<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator\Ui\Action;

use Gorky\HexCli\Generator\AbstractGenerator;
use Gorky\HexCli\Generator\Generator;
use Gorky\HexCli\Generator\Ui\UiLayer;

class ActionSingleGenerator extends AbstractGenerator implements Generator
{
    public function layerPath(): string
    {
        return UiLayer::LAYER_NAME . '\Action';
    }

    public function suffix(): string
    {
        return 'Action';
    }

    public function sourceCode(string $name): string
    {
        return $this->generateFileContent(
            $name,
            ActionSingle::class,
        );
    }
}