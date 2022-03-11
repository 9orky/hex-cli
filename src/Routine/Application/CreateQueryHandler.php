<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine\Application;

use Gorky\HexCli\Generator\Application\Query\QueryGenerator;
use Gorky\HexCli\Generator\Application\Query\QueryHandlerGenerator;
use Gorky\HexCli\Routine\AbstractRoutine;
use Gorky\HexCli\Routine\Routine;

class CreateQueryHandler extends AbstractRoutine implements Routine
{
    public function name(): string
    {
        return 'cqh';
    }

    public function actionKeys(): array
    {
        return ['Get'];
    }

    public function suffix(): string
    {
        return 'QueryHandler';
    }

    public function generators(): array
    {
        return [
            QueryGenerator::class,
            QueryHandlerGenerator::class,
        ];
    }
}