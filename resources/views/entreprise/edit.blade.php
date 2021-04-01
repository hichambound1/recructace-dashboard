@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Modifier </h4>
                    <p class="card-category">info entreprise</p>
                </div>
                <div class="card-body">
                    <form action="{{ url('/entreprise/'.$entreprise->id) }}" method="post">
                        @method('PUT')
                        @csrf   
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nom" class="bmd-label-floating">Nom</label>
                                    <input type="text" id="nom" name="name" value="{{$entreprise->name}}" class="form-control">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="nom" class="bmd-label-floating">description</label>
                                    <textarea name="description" class="form-control">
                                        {{$entreprise->description}}
                                    </textarea>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="site_web" class="bmd-label-floating">site_web</label>
                                    <input type="text" id="site_web" name="site_web" value="{{$entreprise->site_web}}" class="form-control">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="tel" class="bmd-label-floating">tel</label>
                                    <input type="text" id="tel" name="tel" value="{{$entreprise->tel}}" class="form-control">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="email" class="bmd-label-floating">email</label>
                                    <input type="email" id="email" name="email" value="{{$entreprise->email}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <select name="ville" id="ville" class="form-control ">
                                        @foreach ($villes as $item)
                                        <option value="{{$item->id}}"  @if($entreprise->ville_id==$item->id) selected @endif>{{$item->nom}}</option>
                                        @endforeach
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <select name="domain" id="domain" class="form-control ">
                                        @foreach ($domains as $item)
                                        <option value="{{$item->id}}" @if($entreprise->domain_id==$item->id) selected @endif>{{$item->nom}}</option>
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
