<?php

namespace App\Http\Controllers;

use App\Models\Plantio;
use Illuminate\Http\Request;

class PlantioController extends Controller
{
    public function index()
    {
        $plantios = Plantio::all();
        return view('plantios.index', compact('plantios'));
    }

    public function create()
    {
        return view('plantios.create');
    }

    public function store(Request $request)
    {
        Plantio::create($request->all());
        return redirect('plantios')->with('success', 'plantio created successfully.');
    }

    public function edit($id)
    {
        $plantio = Plantio::findOrFail($id);
        return view('plantios.edit', compact('plantio'));
    }

    public function update(Request $request, $id)
    {
        $plantio = Plantio::findOrFail($id);
        $plantio->update($request->all());
        return redirect('plantios')->with('success', 'plantio updated successfully.');
    }

    public function destroy($id)
    {
        $plantio = Plantio::findOrFail($id);
        $plantio->delete();
        return redirect('plantios')->with('success', 'plantio deleted successfully.');
    }
}
