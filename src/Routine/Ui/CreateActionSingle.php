<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine\Ui;

use Gorky\HexCli\Generator\Ui\Action\ActionSingleGenerator;
use Gorky\HexCli\Routine\AbstractRoutine;
use Gorky\HexCli\Routine\Routine;

class CreateActionSingle extends AbstractRoutine implements Routine
{
    public function name(): string
    {
        return 'cas';
    }

    public function actionKeys(): array
    {
        return ['Create', 'Update', 'Remove'];
    }

    public function generators(): array
    {
        return [
            ActionSingleGenerator::class,
        ];
    }
}