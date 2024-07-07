<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function view(Request $request){
        return view('auth.register.register');
    }

    public function register(Request $request){

        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:5',
        ]);

        $usuario = Usuario::create([
            'username' => $validated['username'],
            'password' => bcrypt($validated['password']),
        ]);

        return response()->json(['status' => 'Usuário cadastrado com sucesso!!']);
    }
}
