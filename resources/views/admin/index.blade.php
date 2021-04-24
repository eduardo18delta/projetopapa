@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <p>Painel Administrativo do Site BoxClean</p>
    </div>

        <div class="col">
            <div class="col-lg-3 col-sm-6">
                <a href="list-cliente.php">
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <h6 class="card-title">Personlizar</h6>
                    </div>
                </div>
                </a>
            </div>
        </div>
      
            <div class="col-lg-3 col-sm-6">
                <a href="list-cliente.php">
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <h6 class="card-title">Personlizar</h6>
                    </div>
                </div>
                </a>
            </div>
        
        


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
