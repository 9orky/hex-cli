<?php

declare(strict_types=1);

namespace Gorky\HexCli\Routine;

abstract class AbstractRoutine
{
    public function crudIsh(): bool
    {
        return false;
    }

    public function generators(): array
    {
        return [];
    }
}