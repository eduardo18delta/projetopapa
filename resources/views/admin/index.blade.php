@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <p>Painel Administrativo do Site BoxClean</p>
    </div>

    <div class="row">
        <div class="col">
            <button class="btn btn-default">
                Buscar <span class="glyphicon glyphicon-search"></span>
                </button>
        </div>
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
