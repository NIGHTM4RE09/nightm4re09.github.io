@extends('layout.plantilla')


@section('h1','Marcas')
@section('small','Crear')
@section('li1','Marcas')
@section('li2','Crear')


@section('contenido')
    <div class="box-body">
        <div class="row">
            <div class="col">
                <form action="{{route('marcas.postcrear')}}" method="POST">
                     @csrf
                    <div class="form-group">
                        <h5>Nombre de la Marca</h5>
                        <div class="controls">
                            <input type="text" name="nombre" class="form-control" required
                                data-validation-required-message="Campo Obligatorio">
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="ibox float-e-margins">
                            <div class="col-md-12 offset-md-1">
                                <div class="ibox-title">
                                    <div class="ibox-tools">
                                        <a href="{{ route('marcas.index') }}" class="btn btn-danger btn-sm">Cancelar</a>
                                        <button type="submit" class="btn btn-success btn-sm">Aceptar</button>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

