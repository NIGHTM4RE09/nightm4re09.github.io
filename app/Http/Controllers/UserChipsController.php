<?php

namespace App\Http\Controllers;

use App\Models\Chip;
use App\Models\Userchip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserChipsController extends Controller
{
    public function getindex()
    {
        $userchip = Userchip::all();
        return view('usuarioschips.index' , compact('userchip'));
    }

    public function getcrear()
    {
        return view('usuarioschips.crear');
    }

    public function postcrear(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'nombre' => 'required',
            'email' => 'required|email|unique:userchips,email',
            'password' => 'required|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('usuarioschips.crear')
                ->withErrors($validator)
                ->withInput();
        } else {
            $userchip = UserChip::create([
                'nombre' => $data['nombre'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
            return redirect()->route('usuarioschips.index');
        }

        //$userchip = UserChip::create($request->all());
    }

    public function geteditar(Userchip $userchip)
    {
        return view('usuarioschips.editar', compact('userchip'));
    }

    public function posteditar(Request $request, Userchip $userchip)
    {
        $userchip->update($request->all());

        return redirect()->route('usuarioschips.index');
    }
    public function destroy(UserChip $userchip)
    {
        $userchip->delete();

        return redirect()->route('usuarioschips.index');
    }
}
