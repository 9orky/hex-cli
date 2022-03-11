<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine\Infrastructure;

use Gorky\HexCli\Generator\Infrastructure\Finder\DefaultFinderGenerator;
use Gorky\HexCli\Routine\AbstractRoutine;
use Gorky\HexCli\Routine\Routine;

class CreateDefaultFinder extends AbstractRoutine implements Routine
{
    public function name(): string
    {
        return 'cdf';
    }

    public function generators(): array
    {
        return [
            DefaultFinderGenerator::class,
        ];
    }
}