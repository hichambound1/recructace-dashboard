@extends('layouts.master')
@section('title','ajouter une condidat')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Condidat</h4>
                    <p class="card-category">Ajouter une condidat</p>
                </div>
                <div class="card-body">
                    <form action="{{ url('/condidat') }}" method="post">
                        @csrf     
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nom" class="bmd-label-floating">Nom</label>
                                    <input type="text" id="nom" name="nom" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="prenom" class="bmd-label-floating">prenom</label>
                                    <input type="text" id="prenom" name="prenom" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="tel" class="bmd-label-floating">tel</label>
                                    <input type="text" id="tel" name="tel" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cin" class="bmd-label-floating">cin</label>
                                    <input type="text" id="cin" name="cin" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="bmd-label-floating">email</label>
                                    <input type="email" id="email" name="email" class="form-control">
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
