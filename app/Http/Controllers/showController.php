<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class showController extends Controller
{
    public function index(){    
        return view('frontend.checkout');
    }
    public function showitem(Produit $produit){
        return view('frontend.checkout',compact('produit'));
    }
}
