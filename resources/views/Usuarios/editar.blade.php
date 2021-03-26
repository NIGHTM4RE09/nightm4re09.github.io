@extends('layout.plantilla')


@section('h1', 'Usuarios')
@section('small', 'Editar')
@section('li1', 'Usuarios')
@section('li2', 'Editar')


@section('contenido')
     <div class="box-body">
        <div class="row">
            <div class="col">
                <form action="{{route('usuarios.posteditar', $user)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <h5>Nombre Completo</h5>
                        <div class="controls">
                            <input value="{{$user->name}}" type="text" name="name" class="form-control @error('name') is-invalid @enderror" required autocomplete="name" autofocus>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Correo</span></h5>
                        <div class="controls">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required autocomplete="email"
                                data-validation-required-message="Campo Obligatorio" value="{{$user->email}}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Contraseña</h5>
                        <div class="controls">
                            <input type="password" name="password" class="form-control" required
                                data-validation-required-message="Campo Obligatorio" value="{{$user->password}}">
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="ibox float-e-margins">
                            <div class="col-md-12 offset-md-1">
                                <div class="ibox-title">
                                    <div class="ibox-tools">
                                        <a href="{{ route('usuarios.index') }}" class="btn btn-danger btn-sm">Cancelar</a>
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