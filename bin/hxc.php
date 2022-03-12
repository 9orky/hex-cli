<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use Gorky\HexCli\Command\HxcCommand;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new HxcCommand());
$application->run();
