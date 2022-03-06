<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produit;
use App\User;

use App\categorie;
use auth;


class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id=Auth::user()->id;

        $request->validate([
            'nom'    =>  'required',
            'poids'     =>  'required',
            'categorie_id'     =>  'required',
            'nomc'     =>  'required',
            'emailc'     =>  'required',
            'telephone'     =>  'required',
            'description'     =>  'required',
            'image'         =>  'required|image|max:2048',
            'image2'         =>  'required|image|max:2048'

        ]);

        $image = $request->file('image');
        $image2 = $request->file('image2');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $new_name2 = rand() . '.' . $image2->getClientOriginalExtension();

        $image->move(public_path('images'), $new_name);
        $image2->move(public_path('images'), $new_name2);

        $form_data = array(
            'nom'       =>   $request->nom,
            'poids'        =>   $request->poids,
            'categorie_id'        =>   $request->categorie_id,
            'nomc'        =>   $request->nomc,
            'emailc'        =>   $request->emailc,
            'telephone'        =>   $request->telephone,
            'description'        =>   $request->description,
            'image'            =>   $new_name,
            'image2'            =>   $new_name2,
            'user_id' =>$id

        );

        produit::create($form_data);

        return redirect('/')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
