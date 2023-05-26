<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /**
     * Display the login form
     */
    public function showLoginForm()
    {
        return view('verif.login');
    }

    public function authentication(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // dd($credentials);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/siswa');
        } else {
            return redirect()->back()->withErrors([
                'email'=>'Invalid email or password',
                'password'=>'Invalid email or password'
            ]);
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
}
