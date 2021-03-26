@extends('layout.plantilla')

@section('h1','Chips')
@section('small','Editar')
@section('li1','Chips')
@section('li2','Editar')


@section('contenido')
    <div class="box-body">
        <div class="row">
            <div class="col">
                <form action="{{route('chips.posteditar', $chip)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <h5>ICCID</h5>
                        <div class="controls">
                            <input type="text" name="iccid" class="form-control" required
                            data-validation-required-message="Campo Obligatorio" value="{{$chip->iccid}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Número de teléfono</h5>
                        <div class="controls">
                            <input type="text" name="telefono" class="form-control" required
                            data-validation-required-message="Campo Obligatorio" value="{{$chip->telefono}}">
                        </div>
                    </div>
                    {{-- <div class="form-group">
						<h5>Lada</h5>
						<div class="controls">
							<select name="select" id="select" required class="form-control">
								<option value="">{{$lada}}</option>
                                @foreach ($lada as $item)
                                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                                @endforeach
							</select>
						</div>
					</div> --}}
                    <div class="row justify-content-end">
                        <div class="ibox float-e-margins">
                            <div class="col-md-12 offset-md-1">
                                <div class="ibox-title">
                                    <div class="ibox-tools">
                                        <a href="{{ route('chips.index') }}" class="btn btn-danger btn-sm">Cancelar</a>
                                        <button type="submit" class="btn btn-success btn-sm">Actualizar</button>
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