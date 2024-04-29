<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureAcceptJSONAPI
{

    private $acceptHeader;

    public function __construct(string $acceptHeader = 'application/json')
    {
        $this->acceptHeader = $acceptHeader;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $request->headers->set('Accept', $this->acceptHeader);
        return $next($request);
    }
}
