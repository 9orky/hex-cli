<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine\Domain;

use Gorky\HexCli\Generator\Domain\Entity\EntityGenerator;
use Gorky\HexCli\Routine\AbstractRoutine;
use Gorky\HexCli\Routine\Routine;

class CreateAggregateEntity extends AbstractRoutine implements Routine
{
    public function name(): string
    {
        return 'cae';
    }

    public function generators(): array
    {
        return [
            EntityGenerator::class,
        ];
    }
}