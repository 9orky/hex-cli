<?php

declare(strict_types=1);

namespace Gorky\HexCli;

use Gorky\HexCli\Generator\Generator;
use Gorky\HexCli\Generator\GeneratorRegistry;
use Gorky\HexCli\Routine\RoutineRegistry;

class Bootstrap
{
    private RoutineRegistry $routineRegistry;
    private GeneratorRegistry $generatorRegistry;

    public function __construct(
        private string $subModulePath = 'Order.Order',
        private string $name = 'Order',
        private bool $withCrud = true,
    ) {
        $config = new Config();
        $this->routineRegistry = new RoutineRegistry();
        $this->generatorRegistry = new GeneratorRegistry($config, $this->subModulePath);
    }

    public function start(string $routineName): void
    {
        $routine = $this->routineRegistry->getByName($routineName);

        $scaffolding = \array_reduce(
            $routine->generators(),
            function(array $acc, string $fqcn) use ($routine) {
//                var_dump($fqcn);
                $generator = $this->generatorRegistry->getByFqcn($fqcn);

                if ($routine->crudIsh() && $this->withCrud) {
                    foreach (['Create', 'Update', 'Remove'] as $crudOperation) {
                        $name = $crudOperation . $this->name . $generator->suffix();
                        $acc[$generator->sourceFilePath($name)] = $generator->sourceCode($name);
                    }
                } else {
                    $name = $this->name . $generator->suffix();
                    $acc[$generator->sourceFilePath($name)] = $generator->sourceCode($name);
                }

                return $acc;
            },
            [],
        );

        var_dump(array_keys($scaffolding));
        die;

        foreach ($routine->generators() as $fqns) {
            $generator = $this->generatorRegistry->getByFqcn($fqns);
            var_dump(
//                $generator->targetNamespace($this->name),
//                $generator->fileContent($this->name),
                $generator->sourceFilePath($this->name),
            );

//            if (!is_dir($generator->sourceFileDirectory())) {
//                \mkdir($generator->sourceFileDirectory(), recursive: true);
//            }

//            \file_put_contents(
//                $generator->sourceFilePath($this->name),
//                $generator->fileContent($this->name),
//            );
        }
    }


}