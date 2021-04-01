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
            <a href="{{ url ('/domain/create')}}" class="btn btn-sm btn-neutral pl-3 pr-3">New</a>
          
        </div>
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">domain Table</h4>
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    ID
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    action
                                </th>
                                
                            </thead>
                            <tbody>
                               
                                @foreach($domains as $domain)
                                <tr>
                                    <td>{{ $domain->id }}</td>
                                    <td>{{ $domain->nom }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <a href="{{ url('/domain/'.$domain->id.'/edit') }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <form action="{{ url('/domain/'.$domain->id) }}" method="post">
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
