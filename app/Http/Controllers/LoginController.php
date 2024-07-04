<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){

        return view('login.login');

    }

    public function login(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');

        return response()->json([
            'username' => $username,
            'password' => $password,
        ]);
    }
}
