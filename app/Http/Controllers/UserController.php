<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ville;
use App\Condidat;
use App\Entreprise;

class UserController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['home']]);
    }
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $users = User::all();
       return view('user.index',['users'=>$users]);
   }
   public function home()
   {    $users = User::all();
        $villes = Ville::all();
        $condidats = Condidat::all();
        $entreprise = Entreprise::all();
       return view('home',['users'=>$users,'villes'=>$villes,'condidats'=>$condidats,'entreprise'=>$entreprise]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('user.create');
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
        $user = new user();
        $user->name = $parameters['nom'];
        $user->email = $parameters['email'];
        $user->password = $parameters['password'];
        $user->save();
        return redirect('/user')->with('added','ajouter avec succes');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\user  $user
    * @return \Illuminate\Http\Response
    */
   public function show(user $user)
   {
       //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\user  $user
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $user = User::find($id);
       return view('user.edit',['user' => $user]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\user  $user
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request,$id)
   {
       $parameters = $request->except('_token');
       $user = User::find($id);
       $user->name = $parameters['nom'];
       $user->email = $parameters['email'];
       $user->save();
       return redirect('/user')->with('updated','modifier avec succes');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\user  $user
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       $user = User::find($id);
       $user->delete();
       return redirect('/user')->with('deleted','supprimer avec succes');
   }
}
