<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator;

use Gorky\HexCli\Config;
use Gorky\HexCli\File\FileContentReader;
use Gorky\HexCli\File\FileContentReplacer;

abstract class AbstractGenerator
{
    public function __construct(
        protected FileContentReader $fileContentReader,
        protected FileContentReplacer $fileContentReplacer,
        protected Config $config,
        protected string $subModulePath,
    ) {
    }

    abstract public function layerPath(): string;

    private function subModulePath(): string
    {
        return \str_replace('.', '\\', $this->subModulePath);
    }

    protected function concatToFqcn(string $prefix, string $layerPath, string $name): string
    {
        return \sprintf(
            '%s\\%s\\%s\\%s',
            $prefix,
            $this->subModulePath(),
            $layerPath,
            $name,
        );
    }

    protected function generateFileContent(string $name, string $fqcn): string
    {
        $content = $this->fileContentReader->read($fqcn);
        $reflection = new \ReflectionClass($fqcn);

        $content = $this->fileContentReplacer->replaceClassName(
            $content,
            $reflection->getShortName(),
            $name,
        );

        $content = $this->fileContentReplacer->replaceNamespace(
            $content,
            $reflection->getNamespaceName(),
            $this->targetNamespace($name),
        );

        return $content;
    }

    public function targetNamespace(string $name): string
    {
        $namespacePrefix = $this->config->getNamespacePrefix();

        return $this->concatToFqcn(
            $namespacePrefix,
            $this->layerPath(),
            $name,
        );
    }

    public function sourceFileDirectory(): string
    {
        $sourceDir = $this->config->getSourceDir();
        $subModule = \str_replace('\\', '/', $this->subModulePath());
        $layerPath = \str_replace('\\', '/', $this->layerPath());

        return \sprintf(
            '%s/%s/%s',
            $sourceDir,
            $subModule,
            $layerPath,
        );
    }

    public function sourceFilePath(string $name): string
    {
        return \sprintf(
            '%s/%s.php',
            $this->sourceFileDirectory(),
            $name,
        );
    }
}