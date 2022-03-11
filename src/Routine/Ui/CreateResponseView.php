<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine\Ui;

use Gorky\HexCli\Generator\Ui\Response\ViewGenerator;
use Gorky\HexCli\Routine\AbstractRoutine;
use Gorky\HexCli\Routine\Routine;

class CreateResponseView extends AbstractRoutine implements Routine
{
    public function name(): string
    {
        return 'crv';
    }

    public function generators(): array
    {
        return [
            ViewGenerator::class,
        ];
    }
}