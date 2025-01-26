@extends('adminlte::page')

@section('title', 'Criar Pedido')

@section('content_header')
    <h1 class="text-center">Criando novo pedido...</h1>
@stop

@section('content')
<div class="container">
    <h1>Criar Pedido</h1>
    <form action="{{ url('pedidos') }}" method="POST">
        @csrf

        <!-- Selecionar Cliente -->
        <div class="mb-3">
            <label for="cliente_id" class="form-label">Cliente</label>
            <select name="cliente_id" id="cliente_id" class="form-select" required>
                <option value="" selected disabled>Selecione um cliente</option>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>
        </div>

        <!-- Selecionar Produto -->
        <div class="mb-3">
            <label for="produto" class="form-label">Produto</label>
            <select name="produto" id="produto" class="form-select" required>
                <option value="" selected disabled>Selecione um produto</option>
                <option value="Alface Americana">Alface Americana</option>
                <option value="Alface Crespa">Alface Crespa</option>
                <option value="Alface Mimosa Roxa">Alface Mimosa Roxa</option>
                <option value="Alface Mimosa Verde">Alface Mimosa Verde</option>
                <option value="Alface Chicória">Alface Chicória</option>
                <option value="Alface Lisa">Alface Lisa</option>
                <option value="Brócolis">Brócolis</option>
                <option value="Repolho">Repolho</option>
                <option value="Couve-Flor">Couve-Flor</option>
            </select>
        </div>

        <!-- Quantidade -->
        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade em Dúzias</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control" min="1" required>
        </div>

        <!-- Preço Unitário -->
        <div class="mb-3">
            <label for="preco_unitario" class="form-label">Preço Unitário</label>
            <input type="number" step="0.01" name="preco_unitario" id="preco_unitario" class="form-control" required>
        </div>

        <!-- Status do Pedido -->
        <div class="mb-3">
            <label for="status_pedido" class="form-label">Status do Pedido</label>
            <select name="status_pedido" id="status_pedido" class="form-select">
                <option value="Pendente" selected>Pendente</option>
                <option value="Confirmado">Confirmado</option>
                <option value="Entregue">Entregue</option>
                <option value="Cancelado">Cancelado</option>
            </select>
        </div>

        <!-- Botão de Enviar -->
        <button type="submit" class="btn btn-primary">Criar Pedido</button>
    </form>
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
<script>
    console.log("Página de criação de pedido.");
</script>
@stop
