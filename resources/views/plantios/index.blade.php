@extends('adminlte::page')

@section('title', 'Gerenciar Pedidos')

@section('content_header')
    <h1>Gerenciar Plantios</h1>
    <a href="{{ url('plantios/create') }}" class="btn mt-3" style="background-color: #56DB77; color: white;">Novo Plantio</a>
    <button id="sortButton" class="btn btn-primary mt-3">Ordenar por Data</button>
@stop

@section('content')
    <div class="table-responsive mt-3">
        <table id="plantiosTable" class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Produto</th>
                    <th>Bandejas</th>
                    <th>Data</th>
                    <th>Unidades</th>
                    <th>Área ocupada</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($plantios as $plantio)
                    <tr data-date="{{ $plantio->created_at }}">
                        <td>{{ $plantio->produto }}</td>
                        <td>{{ $plantio->quantidade_bandeijas }}</td>
                        <td>{{ \Carbon\Carbon::parse($plantio->data_plantio)->format('d/m/Y') }}</td>
                        <td>{{ number_format($plantio->quantidade_bandeijas * 200, 0, '', '.') }}</td>
                        <td>{{ number_format($plantio->quantidade_bandeijas / 350, 1)}} hectares</td>
                        <td class="text-center">
                            <a href="{{ url('plantios/'.$plantio->id.'/edit') }}" class="btn btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ url('plantios/'.$plantio->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Tem certeza que deseja excluir?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        table.table td, table.table th {
            padding: 10px; 
        }

        table.table td:last-child, table.table th:last-child {
            width: 120px;
            text-align: center;
        }

        .btn i {
            font-size: 18px; 
        }

        .btn span {
            display: none; 
        }

    </style>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#sortButton').click(function() {
                var rows = $('#plantiosTable tbody tr').get();
                
                rows.sort(function(a, b) {
                    var dateA = $(a).data('date');
                    var dateB = $(b).data('date');
                    
                    return new Date(dateB) - new Date(dateA);
                });
                

                $.each(rows, function(index, row) {
                    $('#plantiosTable').children('tbody').append(row);
                });
            });
        });
    </script>
@stop
