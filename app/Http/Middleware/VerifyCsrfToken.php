<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/forms/proxy-lead',
        '/forms/search-phone',
        'forms.feedback',
        '/forms/add-lead',
        '/forms/quiz2'
    ];
}
