<?php

declare(strict_types=1);

namespace Gorky\HexCli;

class Config
{
    private string $sourceDir;
    private string $namespacePrefix;

    public function __construct()
    {
        if (!file_exists(\getcwd() . '/.hxc.yaml')) {
            throw new \Exception('You must create .hxc.yaml file in root of your project');
        }

//        $config = \yaml_parse_file($configFilePath);
//        $this->sourceDir = $config['source_dir'];
//        $this->namespacePrefix = $config['namespace_prefix'];

        $this->sourceDir = 'src';
        $this->namespacePrefix = 'App\Core';
    }

    public function getSourceDir(): string
    {
        return $this->sourceDir;
    }

    public function getNamespacePrefix(): string
    {
        return $this->namespacePrefix;
    }
}