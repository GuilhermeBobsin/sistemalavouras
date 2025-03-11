@extends('adminlte::page')

@section('title', 'Criar pedido')

@section('content_header')
    
@stop

@section('content')
<div class="row rounded mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                
                    <div class="card-tools d-flex ml-auto">
                        <div class="input-group input-group-md " style="width: 450px;">
                            <input type="text" name="table_search" class="form-control " placeholder="Pesquisar">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Produto</th>
                            <th>Cliente</th>
                            <th>Quantidade</th>
                            <th>Preço</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Data do Pedido</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($pedidos as $pedido)
                                <tr>
                                    <td>{{ $pedido->id }}</td>
                                    <td>{{ $pedido->produto }}</td>
                                    <td>{{ $pedido->cliente->nome}}</td>
                                    <td>{{ $pedido->quantidade }} dz</td>
                                    <td>R${{ $pedido->preco_unitario }}</td>
                                    <td>R${{ $pedido->total }}</td>
                                    <td>{{ $pedido->status_pedido}}</td>
                                    <td>{{ $pedido->created_at->format('d/m/Y') }}</td>
                                    <td>
                                        <a href="{{ url('pedidos/'.$pedido->id.'/edit') }}" class="btn btn-sm" title="Editar pedido">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path d="M11.013 1.427a1.75 1.75 0 0 1 2.474 0l1.086 1.086a1.75 1.75 0 0 1 0 2.474l-8.61 8.61c-.21.21-.47.364-.756.445l-3.251.93a.75.75 0 0 1-.927-.928l.929-3.25c.081-.286.235-.547.445-.758l8.61-8.61Zm.176 4.823L9.75 4.81l-6.286 6.287a.253.253 0 0 0-.064.108l-.558 1.953 1.953-.558a.253.253 0 0 0 .108-.064Zm1.238-3.763a.25.25 0 0 0-.354 0L10.811 3.75l1.439 1.44 1.263-1.263a.25.25 0 0 0 0-.354Z"></path></svg>
                                        </a>
                                        <form action="{{ url('pedidos/'.$pedido->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm" title="Excluir pedido">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path d="M11 1.75V3h2.25a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1 0-1.5H5V1.75C5 .784 5.784 0 6.75 0h2.5C10.216 0 11 .784 11 1.75ZM4.496 6.675l.66 6.6a.25.25 0 0 0 .249.225h5.19a.25.25 0 0 0 .249-.225l.66-6.6a.75.75 0 0 1 1.492.149l-.66 6.6A1.748 1.748 0 0 1 10.595 15h-5.19a1.75 1.75 0 0 1-1.741-1.575l-.66-6.6a.75.75 0 1 1 1.492-.15ZM6.5 1.75V3h3V1.75a.25.25 0 0 0-.25-.25h-2.5a.25.25 0 0 0-.25.25Z"></path></svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="{{ url("/cliente/{$cliente->id}/pedidos/pdf") }}" class="btn btn-primary"><i class="fas fa-download"></i> Gerar PDF</a>


        </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        .fa-plus-circle {
            font-size: 19px;
            text-decoration: none;
        }

        body {
            background-color: #f7f8fc;
        }

        .container {
            margin-top: 20px;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
            background-color: white; 
            border-radius: 12px; 
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        .btn-sm {
            padding: 5px 10px;
            font-size: 14px;
            border: none;
            background-color: transparent; 
        }

        .botao {
            margin-left: 0; 
            margin-top: 10px;
            margin-bottom: -85px;
            height: 40px;
        }

        td {
            white-space: nowrap;
        }

        td svg {
            width: 14px;
        }

        ion-icon {
            font-size: 40px;
            padding: 10px;
        }

        .custom-btn {
        background-color:rgba(36, 211, 80, 0.76);
        color: white;
        font-weight: 500;
        border-radius: 25px;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s ease;
        border: none;
        text-decoration: none;
        margin-top: -5px;
        }

        .custom-btn:hover {
        background-color: #5ac08d;
        text-decoration: none;
        }

        .btn-icon {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 20px;
        height: 20px;
        margin-right: 8px;
        }

        .btn-icon ion-icon {
        font-size: 20px;
        color: white;
        }

        .hid {
            text-decoration: none;
        }
    </style>
@stop

@section('js')
@stop
