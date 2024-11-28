<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!$request->bearerToken()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Authentication token not provided',
            ], 401);
        }

        if (!auth()->guard('sanctum')->check()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid token',
            ], 401);
        }

        $user = $request->user();

        if ($role === 'admin' && !$user->tokenCan('admin')) {
            return response()->json([
                'status' => 'error',
                'message' => 'Forbidden, only admin',
            ], 403);
        }

        if ($role === 'user' && !$user->tokenCan('user') && !$user->tokenCan('admin')) {
            return response()->json([
                'status' => 'error',
                'message' => 'Forbidden for guest',
            ], 403);
        }

        return $next($request);
    }
}
