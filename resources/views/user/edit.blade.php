@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Modifier </h4>
                    <p class="card-category">info user</p>
                </div>
                <div class="card-body">
                    <form action="{{ url('/user/'.$user->id) }}" method="post">
                        @method('PUT')
                        @csrf   
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nom" class="bmd-label-floating">Nom</label>
                                    <input type="text" id="nom" name="nom" value="{{$user->name}}" class="form-control">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="email" class="bmd-label-floating">email</label>
                                    <input type="email" id="email" name="email" value="{{$user->email}}" class="form-control">
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
