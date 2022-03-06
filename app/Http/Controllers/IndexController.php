<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produit;
use App\categorie;

class IndexController extends Controller
{
    public function index()
    {
        $produits= produit::all();
        $categories= categorie::all();
        return view('front.about',compact(['produits','categories']));

    }
}
