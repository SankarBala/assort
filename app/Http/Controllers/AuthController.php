<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {

        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|max:20',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->back()->withInput()->withErrors(['email' => 'Invalid email', 'password' => 'Credencials error']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
