@extends('adminlte::page')

@section('title', 'Criar pedido')

@section('content_header')
    
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Calendário de Plantio</h3>
                <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
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
                        <th>Cultura</th>
                        <th>Época de Plantio</th>
                        <th>Época de Colheita</th>
                        <th>Observações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Alface</td>
                        <td>Ano todo</td>
                        <td>30 a 70 dias após plantio</td>
                        <td>Preferência por clima ameno</td>
                    </tr>
                    <tr>
                        <td>Soja</td>
                        <td>Outubro - Dezembro</td>
                        <td>Fevereiro - Maio</td>
                        <td>Exige solo bem drenado</td>
                    </tr>
                    <tr>
                        <td>Milho</td>
                        <td>Setembro - Dezembro</td>
                        <td>Janeiro - Abril</td>
                        <td>Alta exigência hídrica</td>
                    </tr>
                    <tr>
                        <td>Batata</td>
                        <td>Fevereiro - Junho</td>
                        <td>Junho - Outubro</td>
                        <td>Sensível a geadas</td>
                    </tr>
                    <tr>
                        <td>Trigo</td>
                        <td>Abril - Junho</td>
                        <td>Setembro - Novembro</td>
                        <td>Requer baixa umidade</td>
                    </tr>
                    <tr>
                        <td>Arroz</td>
                        <td>Set-Dez (regiões irrigadas)</td>
                        <td>Fev-Mai</td>
                        <td>Cultivo irrigado ou sequeiro</td>
                    </tr>
                    <tr>
                        <td>Café</td>
                        <td>Out-Dez (mudas)</td>
                        <td>Mai-Set</td>
                        <td>Colheita manual ou mecanizada</td>
                    </tr>
                    <tr>
                        <td>Cana-de-açúcar</td>
                        <td>Ano todo (varia por região)</td>
                        <td>10-18 meses após plantio</td>
                        <td>Rebrota até 5 cortes</td>
                    </tr>
                    <tr>
                        <td>Feijão</td>
                        <td>Fev-Abr (1ª safra); Abr-Jul (2ª); Out-Dez (3ª)</td>
                        <td>Mai-Jun / Ago-Out / Jan-Mar</td>
                        <td>Depende da região</td>
                    </tr>
                    <tr>
                        <td>Tomate</td>
                        <td>Fev-Jun / Ago-Nov</td>
                        <td>90-120 dias</td>
                        <td>Sensível a pragas</td>
                    </tr>
                    <tr>
                        <td>Cebola</td>
                        <td>Mar-Jun / Ago-Out</td>
                        <td>Ago-Out / Dez-Fev</td>
                        <td>Melhor em regiões secas</td>
                    </tr>
                    <tr>
                        <td>Cenoura</td>
                        <td>Ano todo</td>
                        <td>90-120 dias</td>
                        <td>Evitar solo encharcado</td>
                    </tr>
                    <tr>
                        <td>Pimentão</td>
                        <td>Fev-Mai / Ago-Nov</td>
                        <td>Mai-Jul / Nov-Jan</td>
                        <td>Melhor em estufa</td>
                    </tr>
                    <tr>
                        <td>Mandioca</td>
                        <td>Ano todo (exceto seca extrema)</td>
                        <td>12-18 meses</td>
                        <td>Resistente à seca</td>
                    </tr>
                    <tr>
                        <td>Abóbora</td>
                        <td>Ago-Nov</td>
                        <td>Jan-Mar</td>
                        <td>Boa adaptação climática</td>
                    </tr>
                    <tr>
                        <td>Melancia</td>
                        <td>Ago-Dez</td>
                        <td>Nov-Mar</td>
                        <td>Melhor em solos arenosos</td>
                    </tr>
                    <tr>
                        <td>Morango</td>
                        <td>Mar-Jun</td>
                        <td>Jul-Out</td>
                        <td>Melhor em clima ameno</td>
                    </tr>
                    <tr>
                        <td>Banana</td>
                        <td>Ano todo</td>
                        <td>10-12 meses após plantio</td>
                        <td>Colheita contínua</td>
                    </tr>
                    <tr>
                        <td>Uva</td>
                        <td>Jul-Set</td>
                        <td>Dez-Mar</td>
                        <td>Depende da variedade</td>
                    </tr>
                    <tr>
                        <td>Maçã</td>
                        <td>Jul-Ago</td>
                        <td>Jan-Mar</td>
                        <td>Melhor em regiões frias</td>
                    </tr>
                    <tr>
                        <td>Laranja</td>
                        <td>Ano todo (varia por região)</td>
                        <td>Mai-Out</td>
                        <td>Produção contínua</td>
                    </tr>
                    <tr>
                        <td>Abacaxi</td>
                        <td>Ano todo</td>
                        <td>14-18 meses após plantio</td>
                        <td>Melhor em solo arenoso</td>
                    </tr>
                    <tr>
                        <td>Cacau</td>
                        <td>Ano todo</td>
                        <td>Mai-Ago / Out-Jan</td>
                        <td>Necessita umidade constante</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

@stop

@section('js')
@stop
