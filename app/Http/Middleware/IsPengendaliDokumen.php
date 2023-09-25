<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsPengendaliDokumen
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $data = session('auth');
        if ($data[0]['role'] != "Document Controller 1" || $data[0]['role'] != "Document Controller 2" || $data[0]['role'] != "Super Admin" || !$data) {
            abort(403);
        }
        return $next($request);
    }
}
