<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Branch;
use App\Models\Stage;
use App\Models\Student;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException; // Tambahkan ini

class Dashboard extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function login(LoginRequest $request)
    {
        $this->ensureIsNotRateLimited($request);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->boolean('remember'))) {

            // Cegah Session Fixation
            $request->session()->regenerate();

            RateLimiter::clear($this->throttleKey($request));

            return redirect()->intended('/dashboard');
        }

        RateLimiter::hit($this->throttleKey($request), 60);

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');
    }

    protected function ensureIsNotRateLimited($request)
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey($request), 5)) {
            return;
        }

        abort(429, 'Terlalu banyak percobaan login. Silakan coba lagi nanti.');
    }

    protected function throttleKey($request)
    {
        return Str::lower($request->email).'|'.$request->ip();
    }
}
