<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator;

interface Generator
{
    public function layerPath(): string;

    public function suffix(): string;

    public function sourceFilePath(string $name): string;

    public function sourceCode(string $name): string;
}