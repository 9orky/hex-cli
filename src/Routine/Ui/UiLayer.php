<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine\Ui;

use Gorky\HexCli\Routine\AbstractRoutine;
use Gorky\HexCli\Routine\Routine;

class UiLayer extends AbstractRoutine implements Routine
{
    public function name(): string
    {
        return 'u';
    }

    public function subRoutines(): array
    {
        return [
            'cas',
            'cal',
            'chr',
            'crv',
        ];
    }
}