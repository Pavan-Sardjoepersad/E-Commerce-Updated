<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){
        $attributes = request()->validate([
            'name' => ['min:3', 'max:255', 'required', ],
            'username' => ['min:3', 'max:255', 'required', Rule::unique('users','username')],
            'email' => ['min:3', 'max:255', 'email', 'required', Rule::unique('users','name')],
            'password' => ['min:6', 'max:255', 'required', Rule::unique('users','username')],
        ]);

        $user = User::create($attributes);

        Auth::login($user);
        
        return redirect('/')->with('success', 'You have been registered');


    }
}
