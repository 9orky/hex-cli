<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine\Domain;

use Gorky\HexCli\Generator\Domain\Entity\EntityGenerator;
use Gorky\HexCli\Generator\Domain\Id\IdValueGenerator;
use Gorky\HexCli\Generator\Domain\Repository\RepositoryGenerator;
use Gorky\HexCli\Routine\AbstractRoutine;
use Gorky\HexCli\Routine\Routine;

class CreateEntityRepository extends AbstractRoutine implements Routine
{
    public function name(): string
    {
        return 'cer';
    }

    public function generators(): array
    {
        return [
            RepositoryGenerator::class,
        ];
    }
}