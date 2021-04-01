@extends('layouts.master')
@section('title','modifier une annonce')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Modifier </h4>
                    <p class="card-category">info annonce</p>
                </div>
                <div class="card-body">
                    <form action="{{ url('/annonce/'.$annonce->id) }}" method="post">
                        @method('PUT')
                        @csrf   
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="slug" class="bmd-label-floating">slug</label>
                                    <input type="text" id="slug" name="slug" value="{{$annonce->slug}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="titre" class="bmd-label-floating">titre</label>
                                    <input type="text" id="titre" name="titre" value="{{$annonce->titre}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="description" class="bmd-label-floating">description</label>
                                    <textarea name="description"   class="form-control">{{$annonce->description}}</textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label for="entreprise" class="bmd-label-floating">entreprise</label>
                                    <select name="entreprise" id="entreprise" class="form-control ">
                                        @foreach ($entreprises as $item)
                                        <option value="{{$item->id}}" @if($annonce->entreprise_id==$item->id) selected @endif>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                 </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Update</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
