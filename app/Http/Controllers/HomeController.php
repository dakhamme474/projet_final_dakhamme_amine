<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    public function shop(){
        return view('frontend.shop');
    }
    public function panier(){
        return view('frontend.panier');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function coeur(){
        return view('frontend.coeur');
    }
    public function checkout(){
        return view('frontend.checkout');
    }
    public function boite(){
        return view('backend.boitemessagerie');
    }
}
