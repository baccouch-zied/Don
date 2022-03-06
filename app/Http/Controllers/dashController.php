<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Produit;
use App\Contact;
use App\User;
class dashController extends Controller
{
    public function index()
    {
        $categorie= categorie::all();
        $produit= produit::all();
        $contact= contact::all();
        $user= user::all();
        return view('back.index',compact('categorie','produit','contact','user'));
    }
}
