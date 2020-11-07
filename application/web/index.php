<?php

use FF\container\PHPDIContainer;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config/params.php';

$config = require __DIR__ . '/../config/config.php';
$definitions = require __DIR__ . '/../config/definitions.php';
$container = new PHPDIContainer($definitions);

(new FF\Application($container, $config))->run();
