<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $cart = session('cart', []);

        return view('cart.index', ['cart' => $cart]);
    }
}
