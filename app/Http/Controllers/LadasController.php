<?php

namespace App\Http\Controllers;

use App\Models\Lada;
use App\Models\Chip;
use Illuminate\Http\Request;

class LadasController extends Controller
{
    public function getindex()
    {
        $lada = Lada::all();
        return view('Ladas.index', compact('lada'));
    }

    public function getcrear()
    {
        return view('Ladas.crear');
    }

    public function postcrear(Request $request)
    {
        $ladas = Lada::create($request->all());

        return redirect()->route('ladas.index');

    }

    public function geteditar(Lada $lada)
    {
        return view('ladas.editar', compact('lada'));
    }

    public function posteditar(Request $request, Lada $lada)
    {
        $lada->update($request->all());

        return redirect()->route('ladas.index');
    }

    public function destroy(Lada $lada)
    {
        $lada->delete();

        return redirect()->route('ladas.index');
    }

    /* public function  getlada($chip_id)
    {
        $ladas  = Lada::all();
        $chip = Chip::find($chip_id);
        if (!is_null($chip)) {
            return view('ladas.chips', [
                'chip' => $chip,
                'ladas' => $ladas
            ]);
        } else {
            return redirect()->route('chips.index');
        }
    }

    public function  postlada(Request $request, $chip_id)
    {
        $chip = Chip::find($chip_id);
        $data = $request->get("ladas", []);
        $chip->ladas()->sync($data);
        return redirect()->route('chips.index');
    } */

    public function __construct()
    {
        $this->middleware('auth');
    }
}
