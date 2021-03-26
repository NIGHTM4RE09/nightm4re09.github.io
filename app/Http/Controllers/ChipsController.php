<?php

namespace App\Http\Controllers;

use App\Models\Chip;
use App\Models\Lada;
use App\Models\Userchip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChipsController extends Controller
{
    public function getindex()
    {
        $chip = Chip::get();
        return view('chips.index', compact('chip'));
    }

    public function getcrear()
    {
        $ladas = Lada::get();

        return view('chips.crear', compact('ladas'));
    }

    public function postcrear(Request $request)
    {

        $data = $request->all();
        $validator = Validator::make($data, [
            'iccid' => 'required|unique:chips',
            'telefono' => 'required|unique:chips',
            'lada_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('chips.crear')
            ->withErrors($validator)
                ->withInput();
        } else {

            $chips = Chip::create([
                'iccid' => $data['iccid'],
                'telefono' => $data['telefono'],
                'lada_id' => $data['lada_id'],
            ]);
            
            if ($request->lada) {
                $chips->lada()->attach($request->lada);
            }
            return redirect()->route('chips.index');
        }
    }

    public function geteditar(Chip $chip)
    {
        return view('chips.editar', compact('chip'));
    }

    public function posteditar(Request $request, Chip $chip)
    {
        $chip->update($request->all());

        return redirect()->route('chips.index');

    }
    public function destroy(Chip $chip)
    {
        $chip->delete();

        return redirect()->route('chips.index');
    }

    public function getasignar($userchip_id)
    {

        $chips  = Chip::all();
        $userchip = Userchip::find($userchip_id);
        if (!is_null($userchip)) {
            return view('chips.asignar', [
                'userchip' => $userchip,
                'chips' => $chips
            ]);
        } else {
            return redirect()->route('userchips.index');
        }

        //$chips = Chip::get();

        //return view('usuarioschips.asignar', compact('chips'));
    }

    public function postasignar(Request $request, $userchip_id)
    {
        $userchip = Userchip::find($userchip_id);
        $data = $request->get("chips", []);
        $userchip->chip()->sync($data);
        return redirect()->route('usuarioschips.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
