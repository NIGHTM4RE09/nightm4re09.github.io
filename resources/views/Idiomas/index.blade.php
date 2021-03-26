@extends('layout.plantilla')

@section('h1','Idiomas')
@section('small','Contenido')
@section('li1','Idiomas')
@section('li2','Contenido')


@section('contenido')
<div class="row justify-content-end">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="ibox-tools">
                    <a href="{{url('/')}}" class="btn btn-danger btn-sm">Volver</a>
                    <a href="{{route('idiomas.crear')}}" class="btn btn-success btn-sm">Agregar</a>
                </div>
                <br>
            </div>
        </div>
    </div>
    
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Tabla de Idiomas</h3>
                <h6 class="box-subtitle">Exportar datos para copiar, Excel & PDF</h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                        <thead>
                            <tr>
                                <th>Idioma</th>
                                <th>Creado</th>
                                <th>Actualizado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($idioma as $item)
                                <tr>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td>
                                        <div class="clearfix">
					                        <a class="btn btn-sm btn-info" href="#">
						                        <i class="fa fa-edit"></i>
					                        </a>
                                            <a class="btn btn-sm btn-danger" href="#">
						                        <i class="fa fa-trash"></i>
					                        </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Creado</th>
                                <th>Actualizado</th>
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