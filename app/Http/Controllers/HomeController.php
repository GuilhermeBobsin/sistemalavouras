<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function duzias()
    {
        $alfaceCrespa = Pedido::where('produto', 'crespa')->sum('quantidade');
        $mimosaVerde = Pedido::where('produto', 'mimosaverde')->sum('quantidade');
        return view('controleduzias', compact('alfaceCrespa', 'mimosaVerde'));
    }


    public function index()
    {
        $clientes = Cliente::count();
        $pedidos = Pedido::count();
        $duzias = Pedido::sum('quantidade');
        $pedidosConcluidos = Pedido::where('status_pedido', 'concluido')->count();
        $pedidosPendentes = Pedido::where('status_pedido', 'pendente')->count();
        $pedidosCancelados = Pedido::where('status_pedido', 'cancelado')->count();
        return view('dashboard', compact('clientes', 'pedidos', 'duzias', 'pedidosConcluidos', 'pedidosPendentes', 'pedidosCancelados'));
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
