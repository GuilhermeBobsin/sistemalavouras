@extends('adminlte::page')

@section('title', 'Editar Cliente')

@section('content_header')
    <h1 class="text-center">Editando cliente...</h1>
@stop

@section('content')
    <div class="container">
        <div class="card shadow-lg">
            <div class="card-header">
                <h3 class="card-title">Formulário de Edição</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('clientes/' . $cliente->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="nome" id="nome" class="form-control" value="{{$cliente->nome}}" placeholder="Digite o nome do cliente" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-city"></i></span>
                            </div>
                            <input type="text" name="cidade" id="cidade" class="form-control" value="{{$cliente->cidade}}" placeholder="Digite a cidade" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="text" name="telefone" id="telefone" class="form-control" value="{{$cliente->telefone}}" placeholder="Digite o telefone" required>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success btn-md">Editar</button>
                        <a href="{{ url('clientes') }}" class="btn btn-danger btn-md ml-3">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        .container {
            margin-top: 30px;
            width: 60%;
            margin-left: auto;
            margin-right: auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .card-header {
            background-color: #28a745;
            color: white;
        }

        .input-group-text {
            background-color: #f8f9fa;
        }
    </style>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/inputmask@5.0.7/dist/inputmask.min.js"></script>
    <script>
        const telefoneInput = document.getElementById('telefone');
        const im = new Inputmask('(99) 99999-9999');
        im.mask(telefoneInput);
    </script>
@stop
