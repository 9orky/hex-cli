<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine\Infrastructure;

use Gorky\HexCli\Generator\Infrastructure\Repository\DefaultRepositoryGenerator;
use Gorky\HexCli\Routine\AbstractRoutine;
use Gorky\HexCli\Routine\Routine;

class CreateDefaultRepository extends AbstractRoutine implements Routine
{
    public function name(): string
    {
        return 'cdr';
    }

    public function generators(): array
    {
        return [
            DefaultRepositoryGenerator::class,
        ];
    }
}