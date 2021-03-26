@extends('layout.plantilla')

@section('h1','Chips')
@section('small','Crear')
@section('li1','Chips')
@section('li2','Crear')


@section('contenido')
    <div class="box-body">
        <div class="row">
            <div class="col">
                <form action="{{route('chips.postcrear')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <h5>ICCID</h5>
                        <div class="controls">
                            <input id="iccid" type="text" name="iccid" class="form-control" required
                                data-validation-required-message="Campo Obligatorio" value="{{ old('iccid') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Número de teléfono</h5>
                        <div class="controls">
                            <input id="telefono" type="text" name="telefono" class="form-control" required
                                data-validation-required-message="Campo Obligatorio" value="{{ old('telefono') }}">
                        </div>
                    </div>
                    <div class="form-group">
						<h5>Asignar Lada</h5>
						<div class="controls">
							<select name="lada_id" id="lada_id" required class="form-control">
								<option value="">No se ha seleccionado ninguna lada</option>
                                @foreach ($ladas as $item)
                                    <option id="lada_{{$item->id}}" name="lada[]" value="{{$item->id}}">{{$item->nombre}}</option>
                                @endforeach
							</select>
						</div>
					</div>
                    <div class="row justify-content-end">
                        <div class="ibox float-e-margins">
                            <div class="col-md-12 offset-md-1">
                                <div class="ibox-title">
                                    <div class="ibox-tools">
                                        <a href="{{ route('chips.index') }}" class="btn btn-danger btn-sm">Cancelar</a>
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