<?php

namespace App\Http\Controllers;

use App\Ville;
use Illuminate\Http\Request;

class VilleController extends Controller
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
        $villes = Ville::all();
        return view('ville.index',['villes'=>$villes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ville.create');
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
         $ville = new Ville();
         $ville->nom = $parameters['nom'];
         $ville->save();
         return redirect('/ville');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function show(Ville $ville)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ville = Ville::find($id);
        return view('ville.edit',['ville' => $ville]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $parameters = $request->except('_token');
        $ville = Ville::find($id);
        $ville->nom = $parameters['nom'];
        $ville->save();
        return redirect('/ville');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ville = Ville::find($id);
        $ville->delete();
        return redirect('/ville');
    }
}
