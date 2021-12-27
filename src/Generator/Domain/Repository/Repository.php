<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator\Domain\Repository;

interface Repository
{
    public function getById(object $id): object;

    public function getAll(): array;

    public function save(object $object): void;
}