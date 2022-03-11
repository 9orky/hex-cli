<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine\Application;

use Gorky\HexCli\Routine\AbstractRoutine;
use Gorky\HexCli\Routine\Routine;

class ApplicationLayer extends AbstractRoutine implements Routine
{

    public function name(): string
    {
        return 'a';
    }

    public function subRoutines(): array
    {
        return [
            'cch',
            'cqh',
        ];
    }
}