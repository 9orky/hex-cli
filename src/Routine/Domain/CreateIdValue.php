<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine\Domain;

use Gorky\HexCli\Generator\Domain\Entity\EntityGenerator;
use Gorky\HexCli\Generator\Domain\Id\IdValueGenerator;
use Gorky\HexCli\Routine\AbstractRoutine;
use Gorky\HexCli\Routine\Routine;

class CreateIdValue extends AbstractRoutine implements Routine
{
    public function name(): string
    {
        return 'civ';
    }

    public function generators(): array
    {
        return [
            IdValueGenerator::class,
        ];
    }
}