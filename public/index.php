<?php

declare(strict_types=1);

require __DIR__ .'/../vendor/autoload.php';

use Jarlskov\Framework\Kernel;
use Zend\Diactoros\ServerRequestFactory;

$providers = [
];

(new Kernel($providers))->dispatch(ServerRequestFactory::fromGlobals());
