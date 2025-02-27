@extends('adminlte::page')

@section('title', 'Criar Plantio')

@section('content_header')
    <h1 class="text-center">Criando Novo Plantio</h1>
@stop

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ url('plantios') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="produto" class="form-label">Produto</label>
                    <br>
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
                    <label for="quantidade_bandeijas" class="form-label">Quantidade de Bandejas</label>
                    <input type="number" name="quantidade_bandeijas" id="quantidade_bandeijas" class="form-control" min="1" required>
                </div>

                <div class="mb-3">
                    <label for="data_plantio" class="form-label">Data do Plantio</label>
                    <input type="date" name="data_plantio" id="data_plantio" class="form-control" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg">Criar Plantio</button>
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
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }

    .card {
        border-radius: 10px;
    }

    label {
        font-weight: bold;
        font-size: 1.1rem;
    }

    .form-select, .form-control {
        border-radius: 5px;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
    }

    .form-select:focus, .form-control:focus {
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .btn-success {
        width: 100%;
        font-size: 1.2rem;
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
</style>
@stop

@section('js')
<script>
    console.log("Página de criação de plantio.");
</script>
@stop
