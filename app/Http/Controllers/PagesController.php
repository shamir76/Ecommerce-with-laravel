<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function checkout(){
        return view('pages.checkout');
    }
    public function cart(){
        return view('pages.cart');
    }
    public function login(){
        return view('pages.login');
    }
    public function not_found(){
        return view('pages.404');
    }
}
