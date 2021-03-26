@extends('layout.plantilla')

@section('h1','Idiomas')
@section('small','Crear')
@section('li1','Idiomas')
@section('li2','Crear')


@section('contenido')
    <div class="box-body">
        <div class="row">
            <div class="col">
                <form novalidate>
                    <div class="form-group">
                        <h5>Agregar idioma</h5>
                        <div class="controls">
                            <input type="text" name="text" class="form-control" required
                                data-validation-required-message="Campo Obligatorio">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="ibox float-e-margins">
            <div class="col-md-12 offset-md-1">
                <div class="ibox-title">
                    <div class="ibox-tools">
                        <a href="{{ route('idiomas.index') }}" class="btn btn-danger btn-sm">Cancelar</a>
                        <a href="#" class="btn btn-success btn-sm">Aceptar</a>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div> 
@endsection