<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator;

use Gorky\HexCli\Config;
use Gorky\HexCli\File\FileContentReader;
use Gorky\HexCli\File\FileContentReplacer;
use Gorky\HexCli\Generator\Application\Command\CommandGenerator;
use Gorky\HexCli\Generator\Application\Command\CommandHandlerGenerator;
use Gorky\HexCli\Generator\Application\Query\QueryGenerator;
use Gorky\HexCli\Generator\Application\Query\QueryHandlerGenerator;
use Gorky\HexCli\Generator\Domain\Entity\EntityGenerator;
use Gorky\HexCli\Generator\Domain\Finder\FinderGenerator;
use Gorky\HexCli\Generator\Domain\Model\ModelGenerator;
use Gorky\HexCli\Generator\Domain\Repository\RepositoryGenerator;
use Gorky\HexCli\Generator\Domain\Id\IdValueGenerator;
use Gorky\HexCli\Generator\Infrastructure\Finder\DefaultFinderGenerator;
use Gorky\HexCli\Generator\Infrastructure\Repository\DefaultRepositoryGenerator;
use Gorky\HexCli\Generator\Ui\Action\ActionListGenerator;
use Gorky\HexCli\Generator\Ui\Action\ActionSingleGenerator;
use Gorky\HexCli\Generator\Ui\Request\RequestGenerator;
use Gorky\HexCli\Generator\Ui\Response\ViewGenerator;

class GeneratorRegistry
{
    private array $registered = [
        CommandGenerator::class,
        CommandHandlerGenerator::class,
        QueryGenerator::class,
        QueryHandlerGenerator::class,
        EntityGenerator::class,
        RepositoryGenerator::class,
        ModelGenerator::class,
        FinderGenerator::class,
        IdValueGenerator::class,
        DefaultFinderGenerator::class,
        DefaultRepositoryGenerator::class,
        ActionSingleGenerator::class,
        ActionListGenerator::class,
        RepositoryGenerator::class,
        RequestGenerator::class,
        ViewGenerator::class,
    ];

    /**
     * @var Generator[]
     */
    private array $indexedByFqcn = [];

    public function __construct(Config $config, string $subModulePath)
    {
        $fileContentReader = new FileContentReader();
        $fileContentReplacer = new FileContentReplacer();

        foreach ($this->registered as $fqcn) {
            /** @var Generator $instance */
            $instance = new $fqcn(
                $fileContentReader,
                $fileContentReplacer,
                $config,
                $subModulePath,
            );

            $this->indexedByFqcn[$fqcn] = $instance;
        }
    }

    public function getByFqcn(string $fqcn): Generator
    {
//        var_dump(array_keys($this->indexedByFqcn));
        return $this->indexedByFqcn[$fqcn];
    }
}