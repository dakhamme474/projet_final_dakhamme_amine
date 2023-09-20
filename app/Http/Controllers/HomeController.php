<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }
    public function cart(){
        return view("frontend.cart");
    }
    public function category(){
        return view("frontend.category");
    }
    public function contact(){
        return view("frontend.contact");
    }
    
}
