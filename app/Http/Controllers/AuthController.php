<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegister() 
    {
        return view('auth.register');
    }

    public function showLogin() 
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {

        $request->validate([
        'name'     => 'required|min:3',
        'username' => 'required|min:3',
        'email'    => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
    ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $request->validate([
        'email'    => 'required|email',
        'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        }
        return back();
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/berita');

    }

}
