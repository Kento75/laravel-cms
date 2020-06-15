<?php

namespace App\Http\Middleware;

use Closure;

// 管理者チェックミドルウェア
class VerifyIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // 管理者以外の場合、homeにリダイレクト
        if (!auth()->user()->isAdmin()) {
            return redirect(route('home'));
        }
        return $next($request);
    }
}
