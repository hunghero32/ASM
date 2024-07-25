<?php

namespace App\Http\Middleware;

use Closure;
use Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  int  $role
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, int $role): Response
    {
        if (Auth::check()) {
            $user = Auth::user();

            // Debug vai trò người dùng
            if ($user->role === $role) {
                return $next($request);
            }
        }

        return redirect()->route('admin.index')->with('error', 'Bạn không có quyền truy cập trang này.');
    }
}
