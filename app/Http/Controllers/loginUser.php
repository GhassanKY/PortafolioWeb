<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginUser extends Controller
{
    public function Login (Request $request ){

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)){

        $request->session()->regenerate();

        return redirect('Inicio');
    }
        return redirect('login');
    }

/*     public function Logout (Request $request){

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
    } */
}
