<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $data = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];

        if (!Auth::attempt($data)) {
            return 'akun tidak terdaftar';
        }

        return redirect('/dashboard');
    }
    public function logout(Request $request)
    {
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
