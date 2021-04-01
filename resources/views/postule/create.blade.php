@extends('layouts.master')
@section('title','ajouter une postule')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Postule</h4>
                    <p class="card-category">Ajouter une postule</p>
                </div>
                <div class="card-body">
                    <form action="{{ url('/postule') }}" method="post">
                        @csrf     
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="entreprise" class="bmd-label-floating">entreprise</label>
                                    <select name="entreprise" id="entreprise" class="form-control ">
                                        @foreach ($entreprises as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label for="condidat" class="bmd-label-floating">condidat</label>
                                    <select name="condidat" id="condidat" class="form-control ">
                                        @foreach ($condidats as $item)
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
