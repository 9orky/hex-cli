<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator\Domain\Query;

interface ModelRepository
{
    public function getById(object $id): object;

    public function getAll(): array;
}