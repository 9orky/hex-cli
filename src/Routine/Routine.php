<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine;

interface Routine
{
    public function name(): string;

    public function crudIsh(): bool;

    /**
     * @return string[]
     */
    public function generators(): array;
}