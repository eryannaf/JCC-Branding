<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        if (auth()->user()->getRoleNames()[0] == 'siswa') {
            return redirect('/dashboard');
        } elseif (auth()->user()->getRoleNames()[0] == 'admin') {
            return redirect('/admin/dashboard');
        } else {
            return redirect('/p/dashboard');
        }
    }
    public function logout(Request $request)
    {
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
