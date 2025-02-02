<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function calendarioAgricola()
    {
        return view('calendarioagricola');
    }

    public function pedidosPendentes()
    {
        $pedidosPendentes = Pedido::where('status_pedido', 'pendente')->get();
        return view('pedidosPendentes', compact('pedidosPendentes'));
    }

    public function pedidosCancelados()
    {
        $pedidosCancelados = Pedido::where('status_pedido', 'cancelado')->get();
        return view('pedidosCancelados', compact('pedidosCancelados'));
    }

    public function pedidosConcluidos()
    {
        $pedidosConcluidos = Pedido::where('status_pedido', 'concluido')->get();
        return view('pedidosConcluidos', compact('pedidosConcluidos'));
    }

    public function duzias()
    {
        $alfaceCrespa = Pedido::where('produto', 'crespa')->sum('quantidade');
        $alfaceAmericana = Pedido::where('produto', 'americana')->sum('quantidade');
        $alfaceLisa = Pedido::where('produto', 'lisa')->sum('quantidade');
        $mimosaVerde = Pedido::where('produto', 'mimosaverde')->sum('quantidade');
        $mimosaRoxa = Pedido::where('produto', 'mimosaroxa')->sum('quantidade');
        $alfaceChicoria = Pedido::where('produto', 'chicoria')->sum('quantidade');
        $brocolis = Pedido::where('produto', 'brocolis')->sum('quantidade');
        $repolho = Pedido::where('produto', 'repolho')->sum('quantidade');
        $couveFlor = Pedido::where('produto', 'couveflor')->sum('quantidade');

        return view('controleduzias', compact('alfaceCrespa', 'alfaceAmericana', 
        'alfaceLisa', 'mimosaVerde', 'mimosaRoxa', 'alfaceChicoria', 'brocolis', 'repolho', 'couveFlor'));
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
