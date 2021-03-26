@extends('layout.plantilla')

@section('h1', 'Chips')
@section('small', 'Contenido')
@section('li1', 'Chips')
@section('li2', 'Contenido')

@section('contenido')
        <div class="row justify-content-end">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="ibox-tools">
                    <a href="{{url('/')}}" class="btn btn-danger btn-sm">Volver</a>
                    <a href="{{route('chips.crear')}}" class="btn btn-success btn-sm">Agregar</a>
                </div>
                <br>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Tabla de Chips</h3>
                <h6 class="box-subtitle">Exportar datos para copiar, Excel & PDF</h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                        <thead>
                            <tr>
                                <th>ICCID</th>
                                <th>No. Teléfono</th>
                                <th>LADA</th>
                                <th>Creado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($chip as $item)
                               <tr>
                                    <td>{{$item->iccid}}</td>
                                    <td>{{$item->telefono}}</td>
                                    <td>{{$item->lada->nombre}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>
                                        <div class="clearfix">
                                            <form action="{{route('chips.destroy', $item)}}" method="POST">
                                                @csrf
                                                @method('delete')

                                                <a class="btn btn-sm btn-info" href="{{route('chips.editar', $item)}}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <button class="btn btn-sm btn-danger" type="submit">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr> 
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ICCID</th>
                                <th>No. Teléfono</th>
                                <th>LADA</th>
                                <th>Creado</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
@endsection