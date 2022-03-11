<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine;

interface Routine
{
    public function name(): string;

    /**
     * @return string[]
     */
    public function generators(): array;

    /**
     * @return string[]
     */
    public function subRoutines(): array;

    /**
     * @return string[]
     */
    public function actionKeys(): array;
}