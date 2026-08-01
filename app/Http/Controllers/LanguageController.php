<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LanguageController extends Controller
{
    public function switch(Request $request, $locale)
{
    abort_unless(in_array($locale, ['id', 'en']), 404);

    session([
        'locale' => $locale
    ]);

    Cookie::queue(
        'locale',
        $locale,
        60 * 24 * 365
    );

    if (Auth::check()) {

        Auth::user()->update([
            'language' => $locale
        ]);

    }

    return back();
}
}