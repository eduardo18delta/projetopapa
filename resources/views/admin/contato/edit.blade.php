@extends('adminlte::page')

@section('title', 'Contatos Menu')

@section('content_header')
    <h1>Editando Contatos Menu</h1>
@stop

@section('content')
    <p>Edite aqui os contatos que aparecem no topo do menu.</p>
    
<div class="container-fluid">

<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label>Email:</label>
            <input class="form-control" type="text" name="" value="{{$contatos->first()->email}}">
        </div>
        <div class="form-group">
            <label>Telefone:</label>
            <input class="form-control" type="text" name="" value="{{$contatos->first()->telefone}}">
        </div>
        <div class="form-group">
            <label>Título Botão:</label>
            <input class="form-control" type="text" name="" value="{{$contatos->first()->titulo_botao}}">
        </div>
        <div class="form-group">
            <label>URL Botão:</label>
            <input class="form-control" type="text" name="" value="{{$contatos->first()->url_botao}}">
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="" value="Enviar">
        </div>
    </div>
</div>

</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


