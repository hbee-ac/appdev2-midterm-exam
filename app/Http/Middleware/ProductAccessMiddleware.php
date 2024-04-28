<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $validToken = env('BEARER_TOKEN');

            $token = $request->header('Authorization');
            if(!$token){
                return response()->json(['error'=>'The TOKEN is missing.'], 401);
            }
            if ($token !== $validToken){
                return response()->json(['error'=>'The TOKEN is invalid.'], 401);
            }
        return $next($request);
    }
}
