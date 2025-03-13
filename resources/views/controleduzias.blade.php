@extends('adminlte::page')

@section('title', 'Controle de Dúzias')

@section('content_header')
    <h1 class="text-center">Registro de Dúzias Colhidas</h1>
    <hr>
@stop

@section('content')
<div class="container">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover text-center align-middle">
            <thead class="table-success">
                <tr>
                    <th style="width: 50%;">Produto</th>
                    <th style="width: 50%;">Quantidade</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @php
                    $produtos = [
                        'Alface Crespa' => $alfaceCrespa,
                        'Alface Americana' => $alfaceAmericana,
                        'Alface Lisa' => $alfaceLisa,
                        'Alface Mimosa Verde' => $mimosaVerde,
                        'Alface Mimosa Roxa' => $mimosaRoxa,
                        'Alface Chicória' => $alfaceChicoria,
                        'Brócolis' => $brocolis,
                        'Repolho' => $repolho,
                        'Couve-Flor' => $couveFlor
                    ];
                @endphp
                @foreach ($produtos as $nome => $quantidade)
                    <tr>
                        <td><i class="fas fa-leaf text-success"></i> {{ $nome }}</td>
                        <td><strong class="fs-5">{{ $quantidade }} dúzias</strong></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        .table thead th {
            position: sticky;
            top: 0;
            background-color: #28a745 !important;
            color: white;
            font-size: 18px;
        }
        .table tbody td {
            font-size: 16px;
            padding: 12px;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f8f9fa;
        }
    </style>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
@stop
