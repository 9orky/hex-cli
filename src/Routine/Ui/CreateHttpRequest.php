<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine\Ui;

use Gorky\HexCli\Generator\Ui\Request\RequestGenerator;
use Gorky\HexCli\Routine\AbstractRoutine;
use Gorky\HexCli\Routine\Routine;

class CreateHttpRequest extends AbstractRoutine implements Routine
{
    public function name(): string
    {
        return 'chr';
    }

    public function generators(): array
    {
        return [
            RequestGenerator::class,
        ];
    }
}