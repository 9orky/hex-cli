<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine;

class All extends AbstractRoutine implements Routine
{
    public function name(): string
    {
        return 'all';
    }

    public function subRoutines(): array
    {
        return [
            'a',
            'd',
            'i',
            'u',
        ];
    }
}