<?php

declare(strict_types=1);

namespace Gorky\HexCli\Command;

use Gorky\HexCli\HexGen;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HxcCommand extends Command
{
    protected static $defaultName = 'hxc:gen';

    protected function configure(): void
    {
        $this
            ->addArgument('path', InputArgument::REQUIRED, 'Path to sub-module')
            ->addArgument('name', InputArgument::REQUIRED, 'Name of the generatie')
            ->addArgument('routine', InputArgument::REQUIRED, 'Routine name')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $path = $input->getArgument('path');
        $name = $input->getArgument('name');
        $routine = $input->getArgument('routine');

        var_dump($path, $name, $routine);
        (new HexGen($path, $name))->start($routine);

        return Command::SUCCESS;
    }
}