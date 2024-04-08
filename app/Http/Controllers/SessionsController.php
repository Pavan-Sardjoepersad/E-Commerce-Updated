<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create(){
        return view('login.create');
    }

    public function store(){
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages(['email' => 'Invalid login details']);
        } 

        session()->regenerate();

        return redirect('/')->with('succes', 'Logged In');

    }

    public function destroy(){
        Auth::logout();
        session()->forget('cart');

        return redirect('/')->with('succes','Logged Out');
    }

}
