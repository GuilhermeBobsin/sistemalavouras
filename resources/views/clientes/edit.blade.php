@extends('adminlte::page')

@section('title', 'Criar Cliente')

@section('content_header')
    <h1>Editar Cliente</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{ url('clientes/' . $cliente->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{$cliente->nome}}" required>
            </div>

            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade" class="form-control" value="{{$cliente->cidade}}" required>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone" class="form-control" value="{{$cliente->telefone}}" required>
            </div>

            <button type="submit" class="btn btn-primary">Editar Cliente</button>
            <a href="{{ url('clientes') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
@stop

@section('css')
    <style>
        .container {
            margin-top: 15px;
            width: 50%; 
            margin-left: auto;  
            margin-right: auto; 
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
        }
        h1{
            text-align: center;
        }
    </style>
@stop

@section('js')
    <script>
        console.log("Página de criação de cliente.");
    </script>
@stop
