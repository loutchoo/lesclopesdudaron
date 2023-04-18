<?php

namespace App\Http\Controllers;

use App\Models\Stat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required|string|max:255|min:4',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'password' => Hash::make($validate['password']),
        ]);

        $statistics = new Stat();
        $statistics->user_id = $user->id;
        $statistics->save();

        return redirect()->route('dashboard');
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Authentification réussie, rediriger l'utilisateur vers une autre page
        return redirect()->intended('/dashboard');
    } else {
        // Authentification échouée, rediriger l'utilisateur vers la page de connexion avec un message d'erreur
        return redirect()->back()->withErrors(['error' => 'Les informations de connexion sont invalides !']);
    }
    }

    public function dashboard(){
        $user = Auth::user();
        $statistics = $user->statistics;
        return view('auth/dashboard')->with('stats', $statistics);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
