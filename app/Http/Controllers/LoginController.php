<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\LayananKesehatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login.index')
            ->with('title', 'Login')
            ->with('description', 'Halaman Login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout()
    {
       
    }

}
