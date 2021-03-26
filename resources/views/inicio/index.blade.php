@extends('layout.plantilla')

@section('h1', 'Inicio')
@section('small', 'Aplicaciones')
@section('li1', 'Inicio')
@section('li2', 'Aplicaciones')

@section('contenido')

    <div class="row">
        <div class="col-lg-2">
            <div class="box box-outline-danger">
                <div class="fx-card-item">
                    <a href="{{route('usuarios.index')}}">
                        <div class="widget blue-bg p-lg text-center">
                            <div class="m-b-md">
                                <i class="fa fa-user fa-5x"></i>
                                <h3 class="font-bold no-margins">
                                    Usuarios
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-2">
            <div class="box box-outline-danger">
                <div class="fx-card-item">
                    <a href="{{route('catalogo.index')}}">
                        <div class="widget blue-bg p-lg text-center">
                            <div class="m-b-md">
                                <i class="fa fa-book fa-5x"></i>
                                <h3 class="font-bold no-margins">
                                    Catálogo
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-2">
            <div class="box box-outline-danger">
                <div class="fx-card-item">
                    <a href="{{route('marcas.index')}}">
                        <div class="widget blue-bg p-lg text-center">
                            <div class="m-b-md">
                                <i class="fa fa-copyright fa-5x"></i>
                                <h3 class="font-bold no-margins">
                                    Marcas
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-2">
            <div class="box box-outline-danger">
                <div class="fx-card-item">
                    <a href="{{route('etiquetas.index')}}">
                        <div class="widget blue-bg p-lg text-center">
                            <div class="m-b-md">
                                <i class="fa fa-bookmark fa-5x"></i>
                                <h3 class="font-bold no-margins">
                                    Etiquetas
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-2">
            <div class="box box-outline-danger">
                <div class="fx-card-item">
                    <a href="{{route('idiomas.index')}}">
                        <div class="widget blue-bg p-lg text-center">
                            <div class="m-b-md">
                                <i class="fa fa-language fa-5x"></i>
                                <h3 class="font-bold no-margins">
                                    Idiomas
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-2">
            <div class="box box-outline-danger">
                <div class="fx-card-item">
                    <a href="{{route('usuarioschips.index')}}">
                        <div class="widget blue-bg p-lg text-center">
                            <div class="m-b-md">
                                <i class="fa fa-id-card fa-5x"></i>
                                <h3 class="font-bold no-margins">
                                    Usuarios Chips
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-2">
            <div class="box box-outline-danger">
                <div class="fx-card-item">
                    <a href="{{route('chips.index')}}">
                        <div class="widget blue-bg p-lg text-center">
                            <div class="m-b-md">
                                <i class="fa fa-credit-card fa-5x"></i>
                                <h3 class="font-bold no-margins">
                                    Chips
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-2">
            <div class="box box-outline-danger">
                <div class="fx-card-item">
                    <a href="{{route('ladas.index')}}">
                        <div class="widget blue-bg p-lg text-center">
                            <div class="m-b-md">
                                <i class="fa fa-globe fa-5x"></i>
                                <h3 class="font-bold no-margins">
                                    LADAS
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection
