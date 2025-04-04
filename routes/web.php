<?php

use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ControlePdf;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PlantioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/calendarioagricola', [HomeController::class, 'calendarioAgricola']);
Route::get('controleDuzias', [HomeController::class, 'duzias']);
Route::get('/pedidosPendentes', [HomeController::class, 'pedidosPendentes']);
Route::get('/pedidosCancelados', [HomeController::class, 'pedidosCancelados']);
Route::get('/pedidosConcluidos', [HomeController::class, 'pedidosConcluidos']);
Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('clientes', [ClienteController::class, 'index']);
Route::get('clientes/create', [ClienteController::class, 'create']);
Route::get('clientes/{id}/edit', [ClienteController::class, 'edit']);
Route::get('pedidos', [PedidoController::class, 'index']);
Route::get('pedidos/create', [PedidoController::class, 'create']);
Route::get('pedidos/{id}/edit', [PedidoController::class, 'edit']);
Route::get('clientes/{cliente}/pedidos', [ClienteController::class, 'showPedidos'])->name('clientes.pedidos');
Route::get('plantios', [PlantioController::class, 'index']);
Route::get('plantios/{id}/edit', [PlantioController::class, 'edit']);
Route::get('/pedidos/{id}/pdf', [ControlePdf::class, 'gerarPDF'])->name('pdf.pedido');
Route::get('plantios/create', [PlantioController::class, 'create']);
Route::get('/cliente/{cliente_id}/pedidos/pdf', [ControlePdf::class, 'gerarPdfCliente']);

Route::post('clientes', [ClienteController::class, 'store']);
Route::post('pedidos', [PedidoController::class, 'store']);
Route::post('/pedidos/{id}/concluir', [PedidoController::class, 'concluir'])->name('pedidos.concluir');
Route::post('/pedidos/{id}/cancelar', [PedidoController::class, 'cancelar'])->name('pedidos.cancelar');
Route::post('plantios', [PlantioController::class, 'store']);

Route::put('clientes/{id}', [ClienteController::class, 'update']);
Route::put('pedidos/{id}', [PedidoController::class, 'update']);
Route::put('plantios/{id}', [PlantioController::class, 'update']);

Route::delete('plantios/{id}', [PlantioController::class, 'destroy']);
Route::delete('pedidos/{id}', [PedidoController::class, 'destroy']);
Route::delete('clientes/{id}', [ClienteController::class, 'destroy']);

Route::match(['get', 'post'], '/formulario', [CalculadoraController::class, 'mostrarFormulario']);