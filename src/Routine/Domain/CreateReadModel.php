<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine\Domain;

use Gorky\HexCli\Generator\Domain\Finder\FinderGenerator;
use Gorky\HexCli\Generator\Domain\Model\ModelGenerator;
use Gorky\HexCli\Routine\AbstractRoutine;
use Gorky\HexCli\Routine\Routine;

class CreateReadModel extends AbstractRoutine implements Routine
{
    public function name(): string
    {
        return 'crm';
    }

    public function generators(): array
    {
        return [
            ModelGenerator::class,
            FinderGenerator::class,
        ];
    }
}