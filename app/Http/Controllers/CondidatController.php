<?php

namespace App\Http\Controllers;

use App\Condidat;
use App\Ville;
use Illuminate\Http\Request;

class CondidatController extends Controller
{
    public function __construct()
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
        $condidats = Condidat::all();
        return view('condidat.index',['condidats'=>$condidats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $villes =Ville::all();
        return view('condidat.create',['villes'=>$villes]);
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
         $condidat = new Condidat();
         $condidat->nom = $parameters['nom'];
         $condidat->prenom = $parameters['prenom'];
         $condidat->email = $parameters['email'];
         $condidat->tel = $parameters['tel'];
         $condidat->cin = $parameters['cin'];
         $condidat->ville_id = $parameters['ville'];
         $condidat->user_id = 1;
         $condidat->save();
         return redirect('/condidat')->with('added','ajouter avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Condidat  $condidat
     * @return \Illuminate\Http\Response
     */
    public function show(Condidat $condidat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Condidat  $condidat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $condidat = Condidat::find($id);
        $villes = Ville::all();
        return view('condidat.edit',['condidat' => $condidat,'villes' => $villes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Condidat  $condidat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $parameters = $request->except('_token');
        $condidat = Condidat::find($id);
        $condidat->nom = $parameters['nom'];
         $condidat->prenom = $parameters['prenom'];
         $condidat->email = $parameters['email'];
         $condidat->tel = $parameters['tel'];
         $condidat->cin = $parameters['cin'];
         $condidat->ville_id = $parameters['ville'];
         $condidat->user_id = 1;
         $condidat->save();
        return redirect('/condidat')->with('updated','modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Condidat  $condidat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $condidat = Condidat::find($id);
        $condidat->delete();
        return redirect('/condidat')->with('deleted','delete avec succes');
    }
}
