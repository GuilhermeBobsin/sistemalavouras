@extends('adminlte::page')

@section('title', 'Controle de Dúzias')

@section('content_header')
    <h1 class="text-center">Registro de Dúzias Colhidas</h1>
    <hr>
@stop

@section('content')
<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">
            <thead class="table-success">
                <tr>
                    <th>Produto</th>
                    <th>Quantidade de Dúzias</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Alface Crespa</td>
                    <td><strong>{{ $alfaceCrespa }}</strong></td>
                </tr>
                <tr>
                    <td>Alface Americana</td>
                    <td><strong>{{ $alfaceAmericana }}</strong></td>
                </tr>
                <tr>
                    <td>Alface Lisa</td>
                    <td><strong>{{ $alfaceLisa }}</strong></td>
                </tr>
                <tr>
                    <td>Alface Mimosa Verde</td>
                    <td><strong>{{ $mimosaVerde }}</strong></td>
                </tr>
                <tr>
                    <td>Alface Mimosa Roxa</td>
                    <td><strong>{{ $mimosaRoxa }}</strong></td>
                </tr>
                <tr>
                    <td>Alface Chicória</td>
                    <td><strong>{{ $alfaceChicoria }}</strong></td>
                </tr>
                <tr>
                    <td>Brócolis</td>
                    <td><strong>{{ $brocolis }}</strong></td>
                </tr>
                <tr>
                    <td>Repolho</td>
                    <td><strong>{{ $repolho }}</strong></td>
                </tr>
                <tr>
                    <td>Couve-Flor</td>
                    <td><strong>{{ $couveFlor }}</strong></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
@stop
