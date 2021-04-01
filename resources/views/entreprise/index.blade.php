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
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <a href="/entreprise/create" class="btn btn-sm btn-neutral p-2">Ajouter</a>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4">
            <div class="card card-plain">
                <div class="card-header card-header-primary">
                    <h4 class="card-title mt-0"> Liste des entreprises</h4>
                    <p class="card-category">entreprises</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-hover">
                            <thead class="">
                                <th>ID</th>
                                <th>Name</th>
                                <th>description</th>
                                <th>site web</th>
                                <th>email</th>
                                <th>telephone</th>
                                <th>domain_id</th>
                                <th>ville_id</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($entreprises as $entreprise)
                                <tr>
                                    <td>{{ $entreprise->id }}</td>
                                    <td>{{ $entreprise->name }}</td>
                                    <td>{{ $entreprise->description }}</td>
                                    <td>{{ $entreprise->site_web }}</td>
                                    <td>{{ $entreprise->email }}</td>
                                    <td>{{ $entreprise->tel }}</td>
                                    <td>{{ $entreprise->domain_id }}</td>
                                    <td>{{ $entreprise->ville_id }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <a href="{{ url('/entreprise/'.$entreprise->id.'/edit') }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <form action="{{ url('/entreprise/'.$entreprise->id) }}" method="post">
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

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.css"/>
@endsection

@section('js')
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
@endsection