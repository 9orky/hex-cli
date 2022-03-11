<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine\Domain;

use Gorky\HexCli\Routine\AbstractRoutine;
use Gorky\HexCli\Routine\Routine;

class DomainLayer extends AbstractRoutine implements Routine
{
    public function name(): string
    {
        return 'd';
    }

    public function subRoutines(): array
    {
        return [
            'cae',
            'cmf',
            'crm',
            'civ',
            'cer',
        ];
    }
}