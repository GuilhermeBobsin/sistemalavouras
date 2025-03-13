@extends('adminlte::page')

@section('title', 'Criar Pedido')

@section('content_header')
    <h1 class="text-center">Criando Novo Pedido</h1>
@stop

@section('content')
<div class="container">
    <div class="card shadow-lg">
        <div class="card-header text-white" style="background-color: #28a745;">
            <h3 class="card-title">Formulário de Pedido</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('pedidos') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="cliente_id" class="form-label">Cliente</label>
                    <select name="cliente_id" id="cliente_id" class="form-select" required>
                        <option value="" selected disabled>Selecione um cliente</option>
                        @foreach($clientes as $cliente)
                            <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="produto" class="form-label">Produto</label>
                    <select name="produto" id="produto" class="form-select" required>
                        <option value="" selected disabled>Selecione um produto</option>
                        <option value="americana">Alface Americana</option>
                        <option value="crespa">Alface Crespa</option>
                        <option value="mimosaroxa">Alface Mimosa Roxa</option>
                        <option value="mimosaverde">Alface Mimosa Verde</option>
                        <option value="chicoria">Alface Chicória</option>
                        <option value="lisa">Alface Lisa</option>
                        <option value="brocolis">Brócolis</option>
                        <option value="repolho">Repolho</option>
                        <option value="couveflor">Couve-Flor</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="quantidade" class="form-label">Quantidade (Dúzias)</label>
                    <input type="number" name="quantidade" id="quantidade" class="form-control" min="1" required>
                </div>

                <div class="mb-3">
                    <label for="preco_unitario" class="form-label">Preço (Dúzia)</label>
                    <input type="number" step="0.01" name="preco_unitario" id="preco_unitario" class="form-control" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg w-100">Criar Pedido</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section('css')
<style>
    .container {
        margin-top: 40px;
        width: 70%;
        margin-left: auto;
        margin-right: auto;
    }

    .card {
        border-radius: 15px;
    }

    label {
        font-weight: bold;
        font-size: 1.1rem;
    }

    .form-select, .form-control {
        border-radius: 8px;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .form-select:focus, .form-control:focus {
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .btn-success {
        font-size: 1.2rem;
        padding: 12px;
    }

    .card-header {
        background-color: #28a745;
        color: white;
        border-radius: 10px 10px 0 0;
    }

    .card-body {
        padding: 30px;
    }

    .mb-3 {
        margin-bottom: 1.5rem;
    }

    .form-label {
        font-size: 1rem;
    }
</style>
@stop

@section('js')
<script>
    console.log("Página de criação de pedido.");
</script>
@stop
