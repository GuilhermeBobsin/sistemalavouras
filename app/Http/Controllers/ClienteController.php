<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        Cliente::create($request->all());
        return redirect('clientes')->with('success', 'cliente created successfully.');
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        return redirect('clientes')->with('success', 'cliente updated successfully.');
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect('clientes')->with('success', 'cliente deleted successfully.');
    }

    public function showPedidos($id)
    {
        // Encontre o cliente pelo ID
        $cliente = Cliente::findOrFail($id);

        // Recupere os pedidos relacionados ao cliente
        $pedidos = $cliente->pedidos; // Supondo que o relacionamento já exista

        // Retorne a view com os pedidos
        return view('clientes.pedidos', compact('cliente', 'pedidos'));
    }


}
