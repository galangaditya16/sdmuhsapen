<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function login(){
        return view('auth.login');
    }

    public function authenticate(Request $request){
        try {
            $credential = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
            if(Auth::attempt($credential)){
                return redirect()->intended('/dashboard');
            }
            return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
        } catch (\Throwable $th) {
           dd($th);
        }

    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}
