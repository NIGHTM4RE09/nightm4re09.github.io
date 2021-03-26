@extends('layout.plantilla')

@section('h1','Catálogo')
@section('small','Crear')
@section('li1','Catálogo')
@section('li2','Crear')


@section('contenido')
    <div class="box-body">
        <div class="row">
            <div class="col">
                <form action="{{route('catalogo.postcrear')}}" method="POST">
                    @csrf                  
                    <div class="form-group">
						<h5>Foto</h5>
						<div class="controls">
							<input type="file" name="imagen" accept="ecocel_images/*" class="form-control" required> </div>
					</div>
                    <div class="form-group">
                        <h5>Nombre del Equipo</h5>
                        <div class="controls">
                            <input type="text" name="text" class="form-control" required
                                data-validation-required-message="Campo Obligatorio">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>No. de serie</h5>
                        <div class="controls">
                            <input type="text" name="text" class="form-control" required
                                data-validation-required-message="Campo Obligatorio">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Pantalla</h5>
                        <div class="controls">
                            <input type="text" name="text" class="form-control" required
                                data-validation-required-message="Campo Obligatorio">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Procesador</h5>
                        <div class="controls">
                            <input type="text" name="text" class="form-control" required
                                data-validation-required-message="Campo Obligatorio">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Memoria Ram</h5>
                        <div class="controls">
                            <input type="text" name="text" class="form-control" required
                                data-validation-required-message="Campo Obligatorio">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Almacenamiento</h5>
                        <div class="controls">
                            <input type="text" name="text" class="form-control" required
                                data-validation-required-message="Campo Obligatorio">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Sistema Operativo</h5>
                        <div class="controls">
                            <input type="text" name="text" class="form-control" required
                                data-validation-required-message="Campo Obligatorio">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Cámara frontal</h5>
                        <div class="controls">
                            <input type="text" name="text" class="form-control" required
                                data-validation-required-message="Campo Obligatorio">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Cámara(s) trasera(s)</h5>
                        <div class="controls">
                            <input type="text" name="text" class="form-control" required
                                data-validation-required-message="Campo Obligatorio">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Batería</h5>
                        <div class="controls">
                            <input type="text" name="text" class="form-control" required
                                data-validation-required-message="Campo Obligatorio">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Medelo</h5>
                        <div class="controls">
                            <input type="text" name="text" class="form-control" required
                                data-validation-required-message="Campo Obligatorio">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Accesorios</h5>
                        <div class="controls">
                            <input type="text" name="text" class="form-control" required
                                data-validation-required-message="Campo Obligatorio">
                        </div>
                    </div>
                    <h5>Precio en pesos</h5>
                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input type="number" class="form-control">
                    </div>
                    <div class="row justify-content-end">
                        <div class="ibox float-e-margins">
                            <div class="col-md-12 offset-md-1">
                                <div class="ibox-title">
                                    <div class="ibox-tools">
                                        <a href="{{ route('catalogo.index') }}" class="btn btn-danger btn-sm">Cancelar</a>
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