<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator\Ui\Action;

use Gorky\HexCli\Generator\AbstractGenerator;
use Gorky\HexCli\Generator\Generator;

class ActionListGenerator extends AbstractGenerator implements Generator
{
    public function layerPath(): string
    {
        return 'Ui\Action';
    }

    public function suffix(): string
    {
        return 'ListAction';
    }

    public function sourceCode(string $name): string
    {
        return $this->generateFileContent(
            $name,
            ActionList::class,
        );
    }
}