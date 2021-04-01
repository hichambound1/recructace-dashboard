@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">user</h4>
                    <p class="card-category">Ajouter un user</p>
                </div>
                <div class="card-body">
                    <form action="{{ url('/user') }}" method="post">
                        @csrf     
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nom" class="bmd-label-floating">Nom</label>
                                    <input type="text" id="nom" name="nom" class="form-control">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="email" class="bmd-label-floating">email</label>
                                    <input type="email" id="email" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="bmd-label-floating">password</label>
                                    <input type="password" id="password" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm" class="bmd-label-floating">password-confirm</label>
                                    <input type="password" id="password-confirm" name="password_confirmation" class="form-control">
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
