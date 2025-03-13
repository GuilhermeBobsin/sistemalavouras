<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ControlePdf extends Controller
{
    public function gerarPdf($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pdf = PDF::loadView('pdf.pedido', compact('pedido'));
        return $pdf->stream("pedido_{$pedido->id}.pdf");
    }

    public function gerarPdfCliente($cliente_id)
    {
        $cliente = Cliente::findOrFail($cliente_id); 
        $pedidos = $cliente->pedidos; 
        $pdf = PDF::loadView('pdf.pedidoCliente', compact('pedidos', 'cliente'))->setPaper("a4");
        return $pdf->stream("pedidos_cliente_{$cliente->id}.pdf");
    }

    
}
