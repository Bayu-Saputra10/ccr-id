<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
{
    $locale = config('app.locale');

    if (Auth::check() && Auth::user()->language) {

        $locale = Auth::user()->language;

    } elseif (session()->has('locale')) {

        $locale = session('locale');

    } elseif ($request->cookie('locale')) {

        $locale = $request->cookie('locale');

    }

    app()->setLocale($locale);

    session([
        'locale' => $locale
    ]);

    return $next($request);
}
}