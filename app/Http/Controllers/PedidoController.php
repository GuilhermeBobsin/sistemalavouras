<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }

    
    public function create()
    {
        $clientes = Cliente::all();
        return view('pedidos.create', compact('clientes'));
    }

    public function store(Request $request)
    {
        Pedido::create($request->except('data_pedido')); 
        return redirect('pedidos')->with('success', 'Pedido criado com sucesso.');
    }


    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.edit', compact('pedido'));
    }

    public function update(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->update($request->all());
        return redirect('pedidos')->with('success', 'pedido updated successfully.');
    }

    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();
        return redirect('pedidos')->with('success', 'pedido deleted successfully.');
    }

}
