@extends('layout.plantilla')


@section('h1', 'Usuarios Chips')
@section('small', 'Crear')
@section('li1', 'Usuarios Chips')
@section('li2', 'Crear')


@section('contenido')
    <div class="box-body">
        <div class="row">
            <div class="col">
                <form action="{{route('usuarioschips.postcrear')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <h5>Nombre Completo</h5>
                        <div class="controls">
                            <input id="nombre" type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" required autocomplete="nombre" autofocus value="{{ old('nombre') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Correo</span></h5>
                        <div class="controls">
                            <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" required autocomplete="email"
                                data-validation-required-message="Campo Obligatorio" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Contraseña</h5>
                        <div class="controls">
                            <input type="password" name="password" class="form-control" required
                                data-validation-required-message="Campo Obligatorio">
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Confirmar Contraseña</h5>
                        <div class="controls">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="ibox float-e-margins">
                            <div class="col-md-12 offset-md-1">
                                <div class="ibox-title">
                                    <div class="ibox-tools">
                                        <a href="{{ route('usuarioschips.index') }}" class="btn btn-danger btn-sm">Cancelar</a>
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
