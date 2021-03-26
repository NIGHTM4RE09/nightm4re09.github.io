@extends('layout.plantilla')

@section('h1', 'Usuarios Chips')
@section('small', 'Asignar Chips')
@section('li1', 'Usuarios Chips')
@section('li2', 'Asignar Chips')

@section('contenido')
    <div class="box-body">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chips seleccionados para el usuario {{$userchip->nombre}}</h3>
                        <h6 class="box-subtitle">Exportar datos para copiar, Excel & PDF</h6>
                    </div>
                    <form action="{{route('asignar.chips.post', $userchip->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="box-body">
                                {{-- <Label>Seleccione Chips: </Label> --}}
                            <select class="form-control select2" multiple="multiple" name="chips[]" id="selectchip" data-placeholder="Seleccione chips" style="width: 80%;">
                                @foreach ($chips as $item)
                                    {{-- <option selected="selected" value="{{ old('id') }}">{{ old('lada->nombre') }} | {{ old('telefono') }} | {{ old('iccid') }}</option> --}}
                                    <option {{in_array($item->id, $userchip->chip()->pluck('chips.id')->all()) ? 'selected="selected"' : ''}} id="chip_{{$item->id}}" value="{{$item->id}}">{{$item->lada->nombre}} | {{$item->telefono}} | {{$item->iccid}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        {{-- <div class="box-body">
                            <div class="table-responsive">
                                <table id="example"
                                    class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                    <thead>
                                        <tr>
                                            <th>ICCID</th>
                                            <th>No. Teléfono</th>
                                            <th>LADA</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($chips as $item)
                                            <tr>
                                                <td>{{ $item->iccid }}</td>
                                                <td>{{ $item->telefono }}</td>
                                                <td>{{ $item->lada->nombre }}</td>
                                                <td>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ICCID</th>
                                            <th>No. Teléfono</th>
                                            <th>LADA</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div> --}}
                        <!-- /.box-body -->
                        <div class="row justify-content-end">
                            <div class="ibox float-e-margins">
                                <div class="col-md-12 offset-md-1">
                                    <div class="ibox-title">
                                        <div class="ibox-tools">
                                            <a href="{{ route('usuarioschips.index') }}"
                                                class="btn btn-danger btn-sm">Cancelar</a>
                                            <button type="submit" class="btn btn-success btn-sm">Guardar</button>
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
    </div>
@endsection
