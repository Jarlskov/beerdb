<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Jarlskov\Framework\Controllers\Controller;
use Psr\Http\Message\ServerRequestInterface;

class BeerController extends Controller
{
    public function create(ServerRequestInterface $request)
    {
        $body = $request->getParsedBody();
        dd($body);
    }
}
