<?php
require_once(realpath(__DIR__.'/../vendor/autoload.php'));

use Cascade\Cascade;

// For this to work you will need the php-redis extension and a Redis server on 127.0.0.1:6379
$loggerConfigFile = realpath(__DIR__.'/dependency_config.yml');

Cascade::fileConfig($loggerConfigFile);
Cascade::getLogger('dependency')->info('Well, that works!');
Cascade::getLogger('dependency')->error('Maybe not...');
