<?php

namespace App\Http\Controllers;

use App\Entreprise;
use App\Ville;
use App\Domain;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
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
        $entreprises = Entreprise::all();
        return view('entreprise.index',['entreprises'=>$entreprises]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $villes = Ville::all();
        $domains = Domain::all();
        return view('entreprise.create',['domains' => $domains,'villes' => $villes]);
       
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
         $entreprise = new Entreprise();
         $entreprise->name = $parameters['name'];
         $entreprise->description = $parameters['description'];
         $entreprise->email = $parameters['email'];
         $entreprise->site_web = $parameters['site_web'];
         $entreprise->tel = $parameters['tel'];
         $entreprise->domain_id = $parameters['domain'];
         $entreprise->ville_id = $parameters['ville'];
         $entreprise->user_id = 1;
         $entreprise->save();
         return redirect('/entreprise')->with('added','ajouter avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprise $entreprise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entreprise = Entreprise::find($id);
        $villes = Ville::all();
        $domains = Domain::all();
        return view('entreprise.edit',['entreprise' => $entreprise,'domains' => $domains,'villes' => $villes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $parameters = $request->except('_token');
        $entreprise = Entreprise::find($id);
        $entreprise->name = $parameters['name'];
         $entreprise->description = $parameters['description'];
         $entreprise->email = $parameters['email'];
         $entreprise->site_web = $parameters['site_web'];
         $entreprise->tel = $parameters['tel'];
         $entreprise->domain_id = $parameters['domain'];
         $entreprise->ville_id = $parameters['ville'];
         $entreprise->user_id = 1;
         $entreprise->save();
        return redirect('/entreprise')->with('updated','modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entreprise = Entreprise::find($id);
        $entreprise->delete();
        return redirect('/entreprise')->with('deleted','supprimer avec succes');
    }
    
}
