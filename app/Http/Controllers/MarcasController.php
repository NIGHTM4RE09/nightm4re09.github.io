<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcasController extends Controller
{
    public function getindex()
    {
        $marca = Marca::all();
        return view('marcas.index', compact('marca'));
    }

    public function getcrear()
    {
        return view('marcas.crear');
    }
    public function postcrear(Request $request)
    {
        $marcas = Marca::create($request->all());

        return redirect()->route('marcas.index');

    }

    public function geteditar(Marca $marca)
    {
        return view('marcas.editar', compact('marca'));
    }

    public function posteditar(Request $request, Marca $marca)
    {
        $marca->update($request->all());

        return redirect()->route('marcas.index');
    }

    public function destroy(Marca $marca)
    {
        $marca->delete();
        
        return redirect()->route('marcas.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
