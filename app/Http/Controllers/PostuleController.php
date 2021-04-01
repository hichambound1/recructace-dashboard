<?php

namespace App\Http\Controllers;

use App\Postule;
use App\Entreprise;
use App\Condidat;
use Illuminate\Http\Request;

class PostuleController extends Controller
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
        $postules = Postule::all();
        return view('postule.index',['postules'=>$postules]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $entreprises = Entreprise::all();
        $condidats = Condidat::all();
        return view('postule.create',['entreprises' => $entreprises,'condidats' => $condidats]);
        
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
         $postule = new Postule();
         $postule->condidat_id = $parameters['condidat'];
         $postule->entreprise_id = $parameters['entreprise'];
         $postule->save();
         return redirect('/postule');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Postule  $postule
     * @return \Illuminate\Http\Response
     */
    public function show(Postule $postule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Postule  $postule
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entreprises = Entreprise::all();
        $condidats = Condidat::all();
        $postule = Postule::find($id);
        return view('postule.edit',['postule' => $postule,'entreprises' => $entreprises,'condidats' => $condidats]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Postule  $postule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $parameters = $request->except('_token');
        $postule = Postule::find($id);
        $postule->condidat_id = $parameters['condidat'];
        $postule->entreprise_id = $parameters['entreprise'];
        $postule->save();
        return redirect('/postule');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Postule  $postule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postule = Postule::find($id);
        $postule->delete();
        return redirect('/postule');
    }
}
