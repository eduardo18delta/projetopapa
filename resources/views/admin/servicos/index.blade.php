@extends('adminlte::page')

@section('title', 'Contatos Menu')

@section('content_header')
    <h1>Serviços</h1>
@stop

@section('content')
    <p>Altere aqui os Serviços.</p>


    
    @if (session('message'))
    <div class="row">
        <div class="alert alert-success">
        {{ session('message') }}
        </div>
    </div>
    @endif

    <div class="container-fluid">
        <div class="row">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Titulo Item</th>
                    <th>Conteúdo</th>
                    <th>Editar</th> 
                    <th>Apagar</th> 
                </tr>                 
                </thead>
                <tbody>
                    @foreach($servicos as $servico)
                        <tr>
                            <td><img src=" {{url("storage/$servico->image") }}" alt="{{$servico->titulo_item}}" style="max-width: 200px;"></td>
                            <td>{{$servico->titulo_item}}</td>
                            <td>{{$servico->conteudo}}</td>
                            <td><a class="btn btn-success" href="/admin/contato/editar/{{$servico->id}}">Editar</a></td>
                            <td><a class="btn btn-danger" href="/admin/contato/apagar/{{$servico->id}}">Apagar</a></td>
                        </tr>
                    @endforeach                    
                </tbody>
            </table>
        </div>

    </div>









@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


