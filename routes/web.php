<?php

use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('controleDuzias', [HomeController::class, 'duzias']);

Route::get('/dashboard', [HomeController::class, 'index']);

Route::get('clientes', [ClienteController::class, 'index']);
Route::get('clientes/create', [ClienteController::class, 'create']);
Route::post('clientes', [ClienteController::class, 'store']);
Route::get('clientes/{id}/edit', [ClienteController::class, 'edit']);
Route::put('clientes/{id}', [ClienteController::class, 'update']);
Route::delete('clientes/{id}', [ClienteController::class, 'destroy']);

Route::get('pedidos', [PedidoController::class, 'index']);
Route::get('pedidos/create', [PedidoController::class, 'create']);
Route::post('pedidos', [PedidoController::class, 'store']);
Route::get('pedidos/{id}/edit', [PedidoController::class, 'edit']);
Route::put('pedidos/{id}', [PedidoController::class, 'update']);
Route::delete('pedidos/{id}', [PedidoController::class, 'destroy']);

Route::match(['get', 'post'], '/formulario', [CalculadoraController::class, 'mostrarFormulario']);

