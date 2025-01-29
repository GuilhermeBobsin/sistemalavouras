<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function mostrarFormulario(Request $request)
    {
        $duzias = null;

        if ($request->isMethod('post')) {
            $caixas = $request->input('caixas'); 
            $unidadesPorCaixa = 16;
            $unidadesTotais = $caixas * $unidadesPorCaixa;
            $duzias = floor($unidadesTotais / 12); 
        }

        return view('formulario', compact('duzias', 'unidadesTotais'));
    }
}
