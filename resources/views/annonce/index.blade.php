@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @if (session('added'))
            <div class="alert alert-success">
                {{ session('added') }}
                <span class="close" data-dismiss="alert">&times;</span>
            </div>
            @endif
            @if (session('updated'))
            <div class="alert alert-warning">
                {{ session('updated') }}
                <span class="close" data-dismiss="alert">&times;</span>
            </div>
            @endif
            @if (session('deleted'))
            <div class="alert alert-danger">
                {{ session('deleted') }}
                <span class="close" data-dismiss="alert">&times;</span>
            </div>
            @endif
        </div>
        <div class="col-md-4 ">
            <a href="{{ url ('/annonce/create')}}" class="btn btn-sm btn-neutral pl-3 pr-3">New</a>
          
        </div>
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">annonce Table</h4>
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    ID
                                </th>
                                <th>
                                    slug
                                </th>
                                <th>
                                    titre
                                </th>
                                <th>
                                    description
                                </th>
                                <th>
                                    entreprise
                                </th>
                                <th>
                                    action
                                </th>
                                
                            </thead>
                            <tbody>
                               
                                @foreach($annonces as $annonce)
                                <tr>
                                    <td>{{ $annonce->id }}</td>
                                    <td>{{ $annonce->slug }}</td>
                                    <td>{{ $annonce->titre }}</td>
                                    <td>{{ $annonce->description }}</td>
                                    <td>{{ $annonce->entreprise_id }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <a href="{{ url('/annonce/'.$annonce->id.'/edit') }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <form action="{{ url('/annonce/'.$annonce->id) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
