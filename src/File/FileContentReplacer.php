<?php

declare(strict_types=1);

namespace Gorky\HexCli\File;

class FileContentReplacer
{
    public function replaceClassName(string $sourceCode, string $from, string $to): string
    {
        return \str_replace(
            'class ' . $from,
            'class ' . $to,
            $sourceCode,
        );
    }

    public function replaceInterfaceName(string $sourceCode, string $from, string $to): string
    {
        return \str_replace(
            'interface ' . $from,
            'interface ' . $to,
            $sourceCode,
        );
    }

    public function replaceNamespace(string $sourceCode, string $from, string $to): string
    {
        return \str_replace(
            'namespace ' . $from,
            'namespace ' . $to,
            $sourceCode,
        );
    }
}