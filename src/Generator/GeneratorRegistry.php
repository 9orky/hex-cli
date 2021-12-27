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

class GeneratorRegistry
{
    private array $registered = [
        EntityGenerator::class,
        CommandGenerator::class,
        CommandHandlerGenerator::class,
        QueryGenerator::class,
        QueryHandlerGenerator::class,
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
//        var_dump($this->indexedByFqcn, $fqcn);die;
        return $this->indexedByFqcn[$fqcn];
    }
}