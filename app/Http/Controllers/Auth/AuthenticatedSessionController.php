<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
{
    try {

        $request->authenticate();

    } catch (\Illuminate\Validation\ValidationException $e) {

        return back()
            ->withErrors([
                'email' => 'Email atau password yang Anda masukkan salah.'
            ])
            ->onlyInput('email');

    }

    $request->session()->regenerate();

    $user = Auth::user();

    /*
    |--------------------------------------------------------------------------
    | Gunakan bahasa yang dipilih sebelum login
    |--------------------------------------------------------------------------
    */

    $locale = session('locale')
        ?? request()->cookie('locale')
        ?? $user->language
        ?? config('app.locale');

    /*
    |--------------------------------------------------------------------------
    | Simpan ke session
    |--------------------------------------------------------------------------
    */

    session([
        'locale' => $locale
    ]);

    /*
    |--------------------------------------------------------------------------
    | Simpan ke cookie
    |--------------------------------------------------------------------------
    */

    cookie()->queue(
        'locale',
        $locale,
        60 * 24 * 365
    );

    /*
    |--------------------------------------------------------------------------
    | Simpan ke database
    |--------------------------------------------------------------------------
    */

    if ($user->language != $locale) {

        $user->language = $locale;

        $user->save();

    }

    app()->setLocale($locale);

    return $user->role === 'admin'
        ? redirect()->route('admin.dashboard')
        : redirect()->route('dashboard');
}

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
