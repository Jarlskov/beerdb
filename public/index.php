<?php

require __DIR__ .'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();
die(var_dump($request));
