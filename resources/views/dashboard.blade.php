@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center" >Painel de Controle | Safra {{now()->year}} </h1>
    <hr>
@stop

@section('content')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{$pedidos}}</h3>
                
                <p>Todos os Pedidos</p>
              </div>
              <div class="icon">
                <i class="ion ion-document-text"></i>
              </div>
              <a href="/pedidos" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $pedidosConcluidos}}</h3>

                <p>Pedidos Concluídos</p>
              </div>
              <div class="icon">
                <i class="fas fa-check-circle"></i>
              </div>
              <a href="/pedidosConcluidos" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $pedidosPendentes}}</h3>

                <p>Pedidos Pendentes</p>
              </div>
              <div class="icon">
                <i class="fas fa-hourglass-half"></i>
              </div>
              <a href="/pedidos/PedidosPende" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $pedidosCancelados}}</h3>

                <p>Pedidos Cancelados</p>
              </div>
              <div class="icon">
                <i class="fas fa-times-circle"></i>
              </div>
              <a href="/pedidosCancelados" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
              <h3>{{ $clientes }}</h3>

                <p>Clientes Registrados</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="/clientes" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-teal">
              <div class="inner">
                <h3>{{ $duzias}}</h3>

                <p>Duzias Colhidas</p>
              </div>
              <div class="icon">
                <i class="ion ion-leaf"></i>
              </div>
              <a href="/controleDuzias" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Mapa</h3>

                <p>Demarcação da lavoura</p>
              </div>
              <div class="icon">
                <i class="ion ion-map"></i>
              </div>
              <a href="https://www.google.com/maps/d/edit?mid=1v3JenLFwTeJtDXwX_r1GawlHTJY5A3o&usp=sharing" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-purple">
              <div class="inner">
                <h3>Calendário</h3>

                <p>Épocas de produções</p>
              </div>
              <div class="icon">
                <i class="ion ion-calendar"></i>
              </div>
              <a href="/calendarioagricola" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box" style="background-color: #F79100;" >
              <div class="inner">
                <h3 style="color: white;" >Plantios</h3>

                <p style="color: white;" >Registros de plantios</p>
              </div>
              <div class="icon">
                <i class="ion ion-leaf"></i>
              </div>
              <a href="/" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css"> 
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    
@stop

@section('js')
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugins/chart.js/Chart.min.js"></script>
    <script src="plugins/sparklines/sparkline.js"></script>
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="dist/js/adminlte.js?v=3.2.0"></script>
    <script src="dist/js/demo.js"></script>
    <script src="dist/js/pages/dashboard.js"></script>
@stop