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
        private string $subModulePath,
        private string $name,
    ) {
        $config = new Config();
        $this->routineRegistry = new RoutineRegistry();
        $this->generatorRegistry = new GeneratorRegistry($config, $this->subModulePath);
    }

    public function start(string $routineName): void
    {
        $routine = $this->routineRegistry->getByName($routineName);

        foreach ($routine->subRoutines() as $subRoutine) {
            $this->start($subRoutine);
        }

        $scaffolding = \array_reduce(
            $routine->generators(),
            function(array $acc, string $fqcn) use ($routine) {
                var_dump($fqcn);
                $generator = $this->generatorRegistry->getByFqcn($fqcn);

                if ($routine->actionKeys()) {
                    foreach ($routine->actionKeys() as $actionKey) {
                        $name = $actionKey . $this->name . $generator->suffix();
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

        foreach ($scaffolding as $filename => $source) {
//            var_dump($filename);
            if (!is_dir(dirname($filename))) {
                mkdir(dirname($filename), recursive: true);
            }

            \file_put_contents($filename, $source);
        }
    }
}