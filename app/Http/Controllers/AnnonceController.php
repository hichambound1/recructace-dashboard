<?php

namespace App\Http\Controllers;

use App\Annonce;
use App\Entreprise;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{   public function __construct()
    {
        $this->middleware('auth');
    }
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $annonces = Annonce::all();
        return view('annonce.index',['annonces'=>$annonces]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $entreprises =Entreprise::all();
        return view('annonce.create',['entreprises'=>$entreprises]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $parameters = $request->except('_token');
         $annonce = new Annonce();
         $annonce->slug = $parameters['slug'];
         $annonce->titre = $parameters['titre'];
         $annonce->description = $parameters['description'];
         $annonce->entreprise_id = $parameters['entreprise'];
         $annonce->save();
         return redirect('/annonce')->with('added','ajouter avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function show(Annonce $annonce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $annonce = Annonce::find($id);
        $entreprises = Entreprise::all();
        return view('annonce.edit',['annonce' => $annonce,'entreprises' => $entreprises]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $parameters = $request->except('_token');
        $annonce = Annonce::find($id);
        $annonce->slug = $parameters['slug'];
        $annonce->titre = $parameters['titre'];
        $annonce->description = $parameters['description'];
        $annonce->entreprise_id = $parameters['entreprise'];
        $annonce->save();
        return redirect('/annonce')->with('updated','modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $annonce = Annonce::find($id);
        $annonce->delete();
        return redirect('/annonce')->with('deleted','delete avec succes');
    }
}
