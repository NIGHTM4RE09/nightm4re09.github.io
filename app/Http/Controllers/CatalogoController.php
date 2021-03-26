<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function getindex()
    {
        $cat = Catalogo::all();
        return view('catalogo.index', compact('cat'));
    }

    public function getcrear()
    {
        return view('catalogo.crear');
    }

    public function postcrear(Request $request)
    {
        $catalogo = Catalogo::create($request->all());
        return redirect()->route('catalogo.index');

    }

    public function geteditar()
    {
        return view('catalogo.editar');
    }

    public function posteditar(Request $request, Catalogo $catalogo)
    {
        $catalogo->upadate($request->all());

        return redirect()->route('catalogo.index');
    }

    public function destroy(Catalogo $catalogo)
    {
        $catalogo->delete();

        return redirect()->route('catalogo.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
