<?php

if (file_exists($file = __DIR__.'/../vendor/autoload.php')) {
    $loader = require_once $file;
    $loader->add('srsbsns', __DIR__);
} else {
    throw new RuntimeException('Install dependencies to run test suite.');
}
