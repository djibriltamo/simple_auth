<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function doLogin(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return to_route('auth.login')->withErrors([
            'email' => 'Votre adresse email est invalide',
        ])->onlyInput('email');

    }

    public function logout()
    {
        Auth::logout();
        return to_route('auth.login');
    }
}
