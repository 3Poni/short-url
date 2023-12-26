<?php

declare(strict_types=1);

//chdir(dirname(__DIR__));

require __DIR__ .  '/../vendor/autoload.php';

$app = require __DIR__ . '/../bootstrap/app.php';

$app->run();

