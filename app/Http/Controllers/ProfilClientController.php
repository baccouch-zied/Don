<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfilClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::user()->id;
        $User= DB::table('users')->where('id' ,'=' ,$id)->get();
        return view('front.profil',compact(['User']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        $image_name = $request->hidden_image;
        $image = $request->file('image');

        if($image != '')
        {
            $request->validate([
                'name' => 'required|string',
                'prenom' => 'required|string',
                'adresse' => 'required|string',
                'email' => ['required', 'string', 'email', 'max:255'],
                'telephone' => 'numeric',
                'image'    =>'required|string',
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);

        }
        else
        {
            $request->validate([
                'name' => 'required|string',
                'prenom' => 'required|string',
                'adresse' => 'required|string',
                'email' => ['required', 'string', 'email', 'max:255'],
                'telephone' => 'numeric',
                'image'    =>'required|string',

            ]);
        }

        $form_data = array(
            'name' => request('name'),
            'prenom' => request('prenom'),
            'adresse' => request('adresse'),
            'email' => request('email'),
            'telephone' => request('telephone'),
            'image'            =>   $image_name
        );

        User::whereId($id)->update($form_data);

        return redirect('/mon-profil')->with('success', 'Vos informations sont modifiées');
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
