<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $clientes = Cliente::count();
        $pedidos = Pedido::count();
        return view('dashboard', compact('clientes', 'pedidos'));
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
}
