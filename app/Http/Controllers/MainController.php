<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function home(){
        $connecte = "connecte";
        $noconnecte = "noconnecte";
        if (Auth::check()) {
            return view('home')->with('message', $connecte);
        } else {
            return view('home')->with('message', $noconnecte);
        }
        return view('home');
    }

    public function download(){
        return view('download');
    }

public function login(){
    if (Auth::check()) {
        return redirect()->route('dashboard');
    } else {
        return view('auth/login');
    }
}

public function register(){
    if (Auth::check()) {
        return redirect()->route('dashboard');
    } else {
        return view('auth/register');
    }
}
}
