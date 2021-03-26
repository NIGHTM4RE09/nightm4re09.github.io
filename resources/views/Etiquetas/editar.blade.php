@extends('layout.plantilla')

@section('h1','Etiquetas')
@section('small','Editar')
@section('li1','Etiquetas')
@section('li2','Editar')


@section('contenido')
    <div class="box-body">
        <div class="row">
            <div class="col">
                <form action="{{route('etiquetas.posteditar', $etiqueta)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <h5>Nombre de la Etiqueta</h5>
                        <div class="controls">
                            <input type="text" name="nombre" class="form-control" required
                                data-validation-required-message="Campo Obligatorio" value="{{$etiqueta->nombre}}">
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="ibox float-e-margins">
                            <div class="col-md-12 offset-md-1">
                                <div class="ibox-title">
                                    <div class="ibox-tools">
                                        <a href="{{ route('etiquetas.index') }}" class="btn btn-danger btn-sm">Cancelar</a>
                                        <button class="btn btn-success btn-sm" type="submit">Actualizar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection