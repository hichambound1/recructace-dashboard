@extends('layouts.master')
@section('title','modifier une postule')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Modifier </h4>
                    <p class="card-category">info Postule</p>
                </div>
                <div class="card-body">
                    <form action="{{ url('/postule/'.$postule->id) }}" method="post">
                        @method('PUT')
                        @csrf   
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="entreprise" class="bmd-label-floating">entreprise</label>
                                <select name="entreprise" id="entreprise" class="form-control ">
                                    @foreach ($entreprises as $item)
                                    <option value="{{$item->id}}"  @if($item->id==$postule->entreprise_id) selected @endif>{{$item->name}}</option>
                                    @endforeach
                                </select>
                             </div>
                             <div class="form-group col-12">
                                <label for="condidat" class="bmd-label-floating">condidat</label>
                                <select name="condidat" id="condidat" class="form-control ">
                                    @foreach ($condidats as $item)
                                    <option value="{{$item->id}}" @if($item->id==$postule->condidat_id) selected @endif>{{$item->nom}}</option>
                                    @endforeach
                                </select>
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
