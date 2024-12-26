<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as FrameworkClass;
use WireElements\WireExtender\Http\Middlewares\IgnoreForWireExtender;

class VerifyCsrfToken extends FrameworkClass
{
    use IgnoreForWireExtender;
}
