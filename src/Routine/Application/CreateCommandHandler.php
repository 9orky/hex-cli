<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine\Application;

use Gorky\HexCli\Generator\Application\Command\CommandGenerator;
use Gorky\HexCli\Generator\Application\Command\CommandHandlerGenerator;
use Gorky\HexCli\Routine\AbstractRoutine;
use Gorky\HexCli\Routine\Routine;

class CreateCommandHandler extends AbstractRoutine implements Routine
{
    public function name(): string
    {
        return 'cch';
    }

    public function actionKeys(): array
    {
        return ['Create', 'Update', 'Remove'];
    }

    public function suffix(): string
    {
        return 'CommandHandler';
    }

    public function generators(): array
    {
        return [
            CommandGenerator::class,
            CommandHandlerGenerator::class,
        ];
    }
}