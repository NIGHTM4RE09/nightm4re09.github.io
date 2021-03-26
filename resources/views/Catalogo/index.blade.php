@extends('layout.plantilla')



@section('h1','Catálogo')
@section('small','Contenido')
@section('li1','Catálogo')
@section('li2','Contenido')


@section('contenido')
    <div class="row justify-content-end">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="ibox-tools">
                    <a href="{{url('/')}}" class="btn btn-danger btn-sm">Volver</a>
                    <a href="{{route('catalogo.crear')}}" class="btn btn-success btn-sm">Agregar</a>
                </div>
                <br>
            </div>
        </div>
    </div>
    
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Tabla de Equipos</h3>
                <h6 class="box-subtitle">Exportar datos para copiar, Excel & PDF</h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Nombre</th>
                                <th>Marca</th>
                                <th>No. Serie</th>
                                <th>Caracteristícas</th>
                                <th>Modelo</th>
                                <th>Accesorios</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cat as $item)
                                <tr>
                                    <td>{{$item->foto}}</td>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{-- {{$marca->nombre}} --}}</td>
                                    <td>{{$item->no_serie}}</td>
                                    <td>
                                        {{$item->pantalla}}
                                        {{$item->procesador}}
                                        {{$item->ram}}
                                        {{$item->almacenamiento}}
                                        {{$item->sistema_operativo}}
                                        {{$item->camara_front}}
                                        {{$item->camara_tras}}
                                        {{$item->bateria}}
                                    </td>
                                    <td>{{$item->modelo}}</td>
                                    <td>{{$item->accesorios}}</td>
                                    <td>${{$item->precio}}</td>
                                    <td>
                                        <div class="clearfix">
                                            <form action="{{route('catalogo.destroy', $item)}}" method="POST">

                                                @csrf
                                                @method('delete')

                                                <a class="btn btn-sm btn-info" href="{{route('catalogo.editar', $item)}}">
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
                                <th>Foto</th>
                                <th>Nombre</th>
                                <th>Marca</th>
                                <th>No. Serie</th>
                                <th>Caracteristícas</th>
                                <th>Modelo</th>
                                <th>Accesorios</th>
                                <th>Precios</th>
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