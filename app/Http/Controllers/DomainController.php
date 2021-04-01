<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain;
class DomainController extends Controller
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
        $domains = Domain::all();
        return view('domain.index',['domains'=>$domains]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('domain.create');
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
         $domain = new Domain();
         $domain->nom = $parameters['nom'];
         $domain->save();
         return redirect('/domain');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function show(Domain $domain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $domain = Domain::find($id);
        return view('domain.edit',['domain' => $domain]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $parameters = $request->except('_token');
        $domain = Domain::find($id);
        $domain->nom = $parameters['nom'];
        $domain->save();
        return redirect('/domain');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $domain = Domain::find($id);
        $domain->delete();
        return redirect('/domain');
    }
}
