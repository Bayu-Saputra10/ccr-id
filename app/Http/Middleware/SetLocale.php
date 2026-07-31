<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $locale = config('app.locale');

        if(auth()->check()){

            $locale = auth()->user()->language;

        }elseif($request->cookie('locale')){

            $locale = $request->cookie('locale');

        }elseif(session()->has('locale')){

            $locale = session('locale');

        }

        app()->setLocale($locale);

        session(['locale'=>$locale]);

        return $next($request);
    }
}