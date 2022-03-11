<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine;

use Gorky\HexCli\Routine\Application\ApplicationLayer;
use Gorky\HexCli\Routine\Application\CreateCommandHandler;
use Gorky\HexCli\Routine\Application\CreateQueryHandler;
use Gorky\HexCli\Routine\Domain\CreateAggregateEntity;
use Gorky\HexCli\Routine\Domain\CreateIdValue;
use Gorky\HexCli\Routine\Domain\CreateModelFinder;
use Gorky\HexCli\Routine\Domain\CreateReadModel;
use Gorky\HexCli\Routine\Domain\CreateEntityRepository;
use Gorky\HexCli\Routine\Domain\DomainLayer;
use Gorky\HexCli\Routine\Infrastructure\CreateDefaultFinder;
use Gorky\HexCli\Routine\Infrastructure\CreateDefaultRepository;
use Gorky\HexCli\Routine\Infrastructure\InfrastructureLayer;
use Gorky\HexCli\Routine\Ui\CreateActionList;
use Gorky\HexCli\Routine\Ui\CreateActionSingle;
use Gorky\HexCli\Routine\Ui\CreateHttpRequest;
use Gorky\HexCli\Routine\Ui\CreateResponseView;
use Gorky\HexCli\Routine\Ui\UiLayer;

class RoutineRegistry
{
    private array $registered = [
        CreateIdValue::class,
        CreateAggregateEntity::class,
        CreateEntityRepository::class,
        CreateCommandHandler::class,
        CreateQueryHandler::class,
        ApplicationLayer::class,
        CreateReadModel::class,
        CreateModelFinder::class,
        DomainLayer::class,
        CreateDefaultFinder::class,
        CreateDefaultRepository::class,
        InfrastructureLayer::class,
        CreateActionSingle::class,
        CreateActionList::class,
        CreateHttpRequest::class,
        CreateResponseView::class,
        UiLayer::class,
        All::class,
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
        return $this->indexedByName[$name];
    }
}