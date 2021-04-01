@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">entreprise</h4>
                    <p class="card-category">Ajouter un entreprise</p>
                </div>
                <div class="card-body">
                    <form action="{{ url('/entreprise') }}" method="post">
                        @csrf     
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nom" class="bmd-label-floating">Nom</label>
                                    <input type="text" id="nom" name="name" class="form-control">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="nom" class="bmd-label-floating">description</label>
                                    <textarea name="description" class="form-control"></textarea>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="site_web" class="bmd-label-floating">site_web</label>
                                    <input type="text" id="site_web" name="site_web"  class="form-control">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="tel" class="bmd-label-floating">tel</label>
                                    <input type="text" id="tel" name="tel"  class="form-control">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="email" class="bmd-label-floating">email</label>
                                    <input type="email" id="email" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="domain" class="bmd-label-floating">doamin</label>
                                    <select name="domain" id="domain" class="form-control ">
                                        @foreach ($domains as $item)
                                        <option value="{{$item->id}}">{{$item->nom}}</option>
                                        @endforeach
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label for="ville" class="bmd-label-floating">ville</label>
                                    <select name="ville" id="ville" class="form-control ">
                                        @foreach ($villes as $item)
                                        <option value="{{$item->id}}">{{$item->nom}}</option>
                                        @endforeach
                                    </select>
                                 </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Ajouter</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
