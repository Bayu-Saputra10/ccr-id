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
        $request->authenticate();

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

if (auth()->user()->role === 'admin') {
    return redirect()->route('admin.dashboard');
}

return redirect()->route('dashboard');

        $user = auth()->user();
        
        if (auth()->user()->role == 'admin') {
            return redirect()->route('admin.dashboard');
        }
        if ($user->role === 'viewer') {
            return redirect()->route('dashboard');
        }
        return redirect('/');
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
