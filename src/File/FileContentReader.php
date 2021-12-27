<?php

declare(strict_types=1);

namespace Gorky\HexCli\File;

class FileContentReader
{
    public function read(string $fqns): string
    {
        $absPathToFile = (new \ReflectionClass($fqns))->getFileName();

        return file_get_contents($absPathToFile);
    }
}