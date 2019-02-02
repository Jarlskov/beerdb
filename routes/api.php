<?php

declare(strict_types=1);

use Symfony\Component\Routing\Route;

$router->map('POST', '/beer', 'App\Http\Controllers\BeerController::create');
