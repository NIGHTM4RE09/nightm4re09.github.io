@extends('layout.plantilla')

@section('h1','Asignar Lada')
@section('small','Lada')
@section('li1','Asignar lada')
@section('li2','Lada')


@section('contenido')
    <div class="box-body">
        <div class="row">
            <div class="col">
                <form action="{{route('ladas.chips.post', $chip->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
						<h5>Asignar Lada a {{$chip->telefono}}</h5>
						<div class="controls">
							<select name="select" id="select" required class="form-control">
								<option value="">No se ha seleccionado ninguna lada</option>
                                @foreach ($ladas as $item)
                                    <option name="ladas[]" {{in_array($item->id, $chip->lada()->pluck('ladas.id')->all()) ? 'checked' : ''}} value="{{$item->id}}">{{$item->nombre}}</option>
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