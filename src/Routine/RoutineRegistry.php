<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine;

use Gorky\HexCli\Config;
use Gorky\HexCli\Routine\Application\CreateCommandHandler;
use Gorky\HexCli\Routine\Application\CreateQueryHandler;
use Gorky\HexCli\Routine\Domain\CreateAggregateEntity;

class RoutineRegistry
{
    private array $registered = [
        CreateAggregateEntity::class,
        CreateCommandHandler::class,
        CreateQueryHandler::class,
    ];

    /**
     * @var Routine[]
     */
    private array $indexedByName = [];

    public function __construct()
    {
        foreach ($this->registered as $fqcn) {
            /** @var Routine $routineInstance */
            $routineInstance = new $fqcn;
            $this->indexedByName[$routineInstance->name()] = $routineInstance;
        }
    }

    public function getByName(string $name): Routine
    {
//        var_dump($this->indexedByName, $name);die;
        return $this->indexedByName[$name];
    }
}