<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine\Ui;

use Gorky\HexCli\Generator\Ui\Action\ActionListGenerator;
use Gorky\HexCli\Routine\AbstractRoutine;
use Gorky\HexCli\Routine\Routine;

class CreateActionList extends AbstractRoutine implements Routine
{
    public function name(): string
    {
        return 'cal';
    }

    public function generators(): array
    {
        return [
            ActionListGenerator::class,
        ];
    }
}