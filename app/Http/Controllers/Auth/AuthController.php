<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{

    // ======================
    // LOGIN PAGE
    // ======================
    public function login()
    {
        if(Auth::check()){
            return redirect()->route('dashboard');
        }

        return view('auth.login');
    }


    // ======================
    // REGISTER PAGE
    // ======================
    public function register()
    {
        if(Auth::check()){
            return redirect()->route('dashboard');
        }

        return view('auth.register');
    }


    // ======================
    // PROCESS LOGIN
    // ======================
    public function postLogin(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($request->only('email','password')))
        {
            $request->session()->regenerate();

            return redirect()->route('dashboard')
                ->with('success','Login berhasil');
        }

        return redirect()->route('login')
                ->with('error','Email atau password salah');
    }


    // ======================
    // PROCESS REGISTER
    // ======================
    public function postRegister(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect()->route('dashboard')
                ->with('success','Registrasi berhasil');
    }


    // ======================
    // DASHBOARD
    // ======================
    public function dashboard()
    {
        return view('dashboard');
    }


    // ======================
    // LOGOUT
    // ======================
    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')
                ->with('success','Logout berhasil');
    }

}
