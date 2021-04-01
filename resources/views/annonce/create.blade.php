@extends('layouts.master')
@section('title','ajouter une annonce')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Annonce</h4>
                    <p class="card-category">Ajouter une annonce</p>
                </div>
                <div class="card-body">
                    <form action="{{ url('/annonce') }}" method="post">
                        @csrf     
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="slug" class="bmd-label-floating">slug</label>
                                    <input type="text" id="slug" name="slug" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="titre" class="bmd-label-floating">titre</label>
                                    <input type="text" id="titre" name="titre" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="description" class="bmd-label-floating">description</label>
                                    <textarea name="description"   class="form-control"></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label for="entreprise" class="bmd-label-floating">entreprise</label>
                                    <select name="entreprise" id="entreprise" class="form-control ">
                                        @foreach ($entreprises as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
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
