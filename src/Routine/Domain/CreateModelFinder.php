<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine\Domain;

use Gorky\HexCli\Generator\Domain\Finder\FinderGenerator;
use Gorky\HexCli\Routine\AbstractRoutine;
use Gorky\HexCli\Routine\Routine;

class CreateModelFinder extends AbstractRoutine implements Routine
{
    public function name(): string
    {
        return 'cmf';
    }

    public function generators(): array
    {
        return [
            FinderGenerator::class,
        ];
    }
}