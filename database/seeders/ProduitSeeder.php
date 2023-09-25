<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produit::create([
            'titre'=>'produit',
            'prix'=>50,
            'image'=>'img.jpg',
            'createur'=>1,
            'stock'=>4,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'produit',
            'prix'=>50,
            'image'=>'img2.jpg',
            'createur'=>1,
            'stock'=>3,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'produit',
            'prix'=>50,
            'image'=>'img3.jpg',
            'createur'=>1,
            'stock'=>3,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'produit',
            'prix'=>50,
            'image'=>'img4.jpg',
            'createur'=>1,
            'stock'=>3,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'produit',
            'prix'=>50,
            'image'=>'img5.jpg',
            'createur'=>1,
            'stock'=>1,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'produit',
            'prix'=>50,
            'image'=>'img6.jpg',
            'createur'=>1,
            'stock'=>2,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'produit',
            'prix'=>50,
            'image'=>'img7.jpg',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'produit',
            'prix'=>50,
            'image'=>'img8.jpg',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'produit',
            'prix'=>50,
            'image'=>'img9.jpg',
            'createur'=>1,
            'stock'=>1,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'produit',
            'prix'=>50,
            'image'=>'img9.jpg',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'produit',
            'prix'=>50,
            'image'=>'img2.jpg',
            'createur'=>1,
            'stock'=>1,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'produit',
            'prix'=>50,
            'image'=>'img4.jpg',
            'createur'=>1,
            'stock'=>15,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'produit',
            'prix'=>50,
            'image'=>'img.jpg',
            'createur'=>1,
            'stock'=>2,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'produit',
            'prix'=>50,
            'image'=>'img8.jpg',
            'createur'=>1,
            'stock'=>2,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'produit',
            'prix'=>50,
            'image'=>'img5.jpg',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);


    }
}
