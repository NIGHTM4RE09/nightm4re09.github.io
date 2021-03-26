<?php

namespace App\Http\Controllers;

use App\Models\Idioma;
use Illuminate\Http\Request;

class IdiomasController extends Controller
{
    public function getindex()
    {
        $idioma = Idioma::all();
        return view('Idiomas/index', compact('idioma'));
    }

    public function getcrear()
    {
        return view('Idiomas/crear');
    }

    public function geteditar()
    {
        return view('Idiomas/editar');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
