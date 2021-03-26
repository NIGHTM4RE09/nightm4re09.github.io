<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function getindex()
    {
        $user = User::all();
        return view('usuarios.index', compact('user'));
    }

    public function getcrear()
    {
        return view('usuarios.crear');
    }

    public function postcrear(Request $request)
    {

        $data = $request->all();
        $validator = Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('usuarios.crear')
            ->withErrors($validator)
            ->withInput();
        }else{
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
            return redirect()->route('usuarios.index');
        }

        //$user = User::create($request->all());

    }

    public function geteditar(User $user)
    {
        return view('usuarios.editar', compact('user'));
    }

    public function posteditar(Request $request, User $user)
    {
        $user->update($request->all());

        return redirect()->route('usuarios.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('usuarios.index');
    }
    
}
