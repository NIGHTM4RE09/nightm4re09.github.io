<?php

namespace App\Http\Controllers;

use App\Models\Etiqueta;
use Illuminate\Http\Request;

class EtiquetasController extends Controller
{
    public function getindex()
    {
        $etiqueta = Etiqueta::all();
        return view('etiquetas.index', compact('etiqueta'));
    }

    public function getcrear()
    {
        return view('etiquetas.crear');
    }

    public function postcrear(Request $request)
    {
        $etiqueta = Etiqueta::create($request->all());

        return redirect()->route('etiquetas.index');
        
    }

    public function geteditar(Etiqueta $etiqueta)
    {
        return view('etiquetas.editar', compact('etiqueta'));
    }

    public function posteditar(Request $request, Etiqueta $etiqueta)
    {
        $etiqueta->update($request->all());

        return redirect()->route('etiquetas.index');
    }

    public function destroy(Etiqueta $etiqueta)
    {
        $etiqueta->delete();

        return redirect()->route('etiquetas.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
