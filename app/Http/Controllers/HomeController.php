<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Produit;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class HomeController extends Controller
{
    public function index(){
        $produits = Produit::all();
        $randomProduits = $produits->shuffle()->take(3);
        $fourProduits = Produit::latest()->limit(4)->get();
        $eightrProduits = Produit::latest()->limit(8)->get();
        $lastproduit = Produit::latest()->limit(1)->get();

        return view('frontend.home' , compact('randomProduits' , 'produits' , 'fourProduits' , 'eightrProduits' , 'lastproduit'));
    }
    public function shop(){
        $produits =Produit::latest()->paginate(9);
        return view('frontend.shop',compact("produits"));
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
        $contacts = Contact::all();
        return view('backend.boitemessagerie' , compact("contacts"));
    }
}
