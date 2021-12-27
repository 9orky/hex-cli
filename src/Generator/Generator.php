<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator;

interface Generator
{
    public function layerPath(): string;

    public function suffix(): string;

    public function targetNamespace(string $name): string;

    public function sourceFileDirectory(): string;

    public function sourceFilePath(string $name): string;

    public function sourceCode(string $name): string;
}