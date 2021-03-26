<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\IdiomasController;
use App\Http\Controllers\EtiquetasController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ChipsController;
use App\Http\Controllers\LadasController;
use App\Http\Controllers\UserChipsController;
use App\Http\Controllers\InstallerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/')->group(function () {

    Route::get('/', [InicioController::class, 'getindex']);
    Route::get('logout', [InicioController::class, 'getlogout'])->name('logout.index');
    
});

Route::group(['prefix' => 'Usuarios'], function () {

    Route::get('/', [UsuariosController::class, 'getindex'])->name('usuarios.index');
    Route::get('crear', [UsuariosController::class, 'getcrear'])->name('usuarios.crear');
    Route::post('crear', [UsuariosController::class, 'postcrear'])->name('usuarios.postcrear');
    Route::get('editar/{user}', [UsuariosController::class, 'geteditar'])->name('usuarios.editar');
    Route::put('editar/{user}', [UsuariosController::class, 'posteditar'])->name('usuarios.posteditar');
    Route::delete('eliminar/{user}', [UsuariosController::class, 'destroy'])->name('usuarios.destroy');
});

Route::group(['prefix' => 'Catalogo'], function () {

    Route::get('/', [CatalogoController::class, 'getindex'])->name('catalogo.index');
    Route::get('crear', [CatalogoController::class, 'getcrear'])->name('catalogo.crear');
    Route::post('crear', [CatalogoController::class, 'postcrear'])->name('catalogo.postcrear');
    Route::get('editar/{catalogo}', [CatalogoController::class, 'geteditar'])->name('catalogo.editar');
    Route::put('editar/{catalogo}', [CatalogoController::class, 'posteditar'])->name('catalogo.posteditar');
    Route::delete('eliminar/{catalogo}', [CatalogoController::class, 'destroy'])->name('catalogo.destroy');
});

Route::group(['prefix' => 'Marcas'], function () {

    Route::get('/', [MarcasController::class, 'getindex'])->name('marcas.index');
    Route::get('crear', [MarcasController::class, 'getcrear'])->name('marcas.crear');
    Route::post('crear', [MarcasController::class, 'postcrear'])->name('marcas.postcrear');
    Route::get('editar/{marca}', [MarcasController::class, 'geteditar'])->name('marcas.editar');
    Route::put('editar/{marca}', [MarcasController::class, 'posteditar'])->name('marcas.posteditar');
    Route::delete('eliminar/{marca}', [MarcasController::class, 'destroy'])->name('marcas.destroy');
});

Route::group(['prefix' => 'Etiquetas'], function () {

    Route::get('/', [EtiquetasController::class, 'getindex'])->name('etiquetas.index');
    Route::get('crear', [EtiquetasController::class, 'getcrear'])->name('etiquetas.crear');
    Route::post('crear', [EtiquetasController::class, 'postcrear'])->name('etiquetas.postcrear');
    Route::get('editar/{etiqueta}', [EtiquetasController::class, 'geteditar'])->name('etiquetas.editar');
    Route::put('editar/{etiqueta}', [EtiquetasController::class, 'posteditar'])->name('etiquetas.posteditar');
    Route::delete('eliminar/{etiqueta}', [EtiquetasController::class, 'destroy'])->name('etiquetas.destroy');
});

Route::group(['prefix' => 'Idiomas'], function () {

    Route::get('/', [IdiomasController::class, 'getindex'])->name('idiomas.index');
    Route::get('crear', [IdiomasController::class, 'getcrear'])->name('idiomas.crear');
    Route::post('crear', [IdiomasController::class, 'postcrear'])->name('idiomas.postcrear');
    Route::get('editar/{idioma}', [IdiomasController::class, 'geteditar'])->name('ladas.editar');
    Route::put('editar/{idioma}', [IdiomasController::class, 'posteditar'])->name('ladas.posteditar');
    Route::delete('eliminar/{idioma}', [IdiomasController::class, 'destroy'])->name('idiomas.destroy');
});

Route::prefix('Chips')->group(function () {

    Route::get('/', [ChipsController::class, 'getindex'])->name('chips.index');
    Route::get('crear', [ChipsController::class, 'getcrear'])->name('chips.crear');
    Route::post('crear', [ChipsController::class, 'postcrear'])->name('chips.postcrear');
    Route::get('editar/{chip}', [ChipsController::class, 'geteditar'])->name('chips.editar');
    Route::put('editar/{chip}', [ChipsController::class, 'posteditar'])->name('chips.posteditar');
    Route::delete('eliminar/{chip}', [ChipsController::class, 'destroy'])->name('chips.destroy');
    Route::get('asignar/{userchip_id}', [ChipsController::class, 'getasignar'])->name('asignar.chips');
    Route::post('asignar/{userchip_id}', [ChipsController::class, 'postasignar'])->name('asignar.chips.post');
});

Route::prefix('Ladas')->group(function () {

    Route::get('/', [LadasController::class, 'getindex'])->name('ladas.index');
    Route::get('crear', [LadasController::class, 'getcrear'])->name('ladas.crear');
    Route::post('crear', [LadasController::class, 'postcrear'])->name('ladas.postcrear');
    Route::get('editar/{lada}', [LadasController::class, 'geteditar'])->name('ladas.editar');
    Route::put('editar/{lada}', [LadasController::class, 'posteditar'])->name('ladas.posteditar');
    Route::delete('eliminar/{lada}', [LadasController::class, 'destroy'])->name('ladas.destroy');
    //Route::get('asignar-lada/{chip}', [LadasController::class, 'getlada'])->name('ladas.chips');
    //Route::post('asignar-lada/{chip}', [LadasController::class . 'postlada'])->name('ladas.chips.post');
});

Route::prefix('Usuarios-Chips')->group(function () {

    Route::get('/', [UserChipsController::class, 'getindex'])->name('usuarioschips.index');
    Route::get('crear', [UserChipsController::class, 'getcrear'])->name('usuarioschips.crear');
    Route::post('crear', [UserChipsController::class, 'postcrear'])->name('usuarioschips.postcrear');
    Route::get('editar/{userchip}', [UserChipsController::class, 'geteditar'])->name('usuarioschips.editar');
    Route::put('editar/{userchip}', [UserChipsController::class, 'posteditar'])->name('usuarioschips.posteditar');
    Route::delete('eliminar/{userchip}', [UserChipsController::class, 'destroy'])->name('usuarioschips.destroy');
});

Route::get('/install', [InstallerController::class, 'getIndex']);

Auth::routes(["register" => false]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
