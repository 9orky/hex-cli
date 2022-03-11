<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine\Infrastructure;

use Gorky\HexCli\Routine\AbstractRoutine;
use Gorky\HexCli\Routine\Routine;

class InfrastructureLayer extends AbstractRoutine implements Routine
{
    public function name(): string
    {
        return 'i';
    }

    public function subRoutines(): array
    {
        return [
            'cdf',
            'cdr',
        ];
    }
}