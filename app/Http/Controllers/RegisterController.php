<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function view(Request $request){
        return view('auth.register.register');
    }

    public function register(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');

        return response()->json([
            'username' => $username,
            'password' => $password,
        ]);
    }
}
