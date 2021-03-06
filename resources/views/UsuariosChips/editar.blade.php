@extends('layout.plantilla')


@section('h1', 'Usuarios Chips')
@section('small', 'Editar')
@section('li1', 'Usuarios Chips')
@section('li2', 'Editar')


@section('contenido')
    <div class="box-body">
        <div class="row">
            <div class="col">
                <form action="{{route('usuarioschips.posteditar', $userchip)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <h5>Nombre Completo</h5>
                        <div class="controls">
                            <input type="text" name="nombre" class="form-control" required
                                data-validation-required-message="Campo Obligatorio" value="{{$userchip->nombre}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Nombre de usuario</h5>
                        <div class="controls">
                            <input type="text" name="username" class="form-control" required
                                data-validation-required-message="Campo Obligatorio" value="{{$userchip->username}}">
                        </div>
                    <div class="form-group">
                        <h5>Correo</span></h5>
                        <div class="controls">
                            <input type="email" name="email" class="form-control" required
                                data-validation-required-message="Campo Obligatorio" value="{{$userchip->email}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Confirmar Correo</span></h5>
                        <div class="controls">
                            <input type="email" name="email2" class="form-control" data-validation-match-match="email"
                                data-validation-required-message="Campo Obligatorio" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Contrase??a</h5>
                        <div class="controls">
                            <input type="password" name="password" class="form-control" required
                                data-validation-required-message="Campo Obligatorio" value="{{$userchip->password}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Confirmar Contrase??a</h5>
                        <div class="controls">
                            <input type="password" name="password2" data-validation-match-match="password"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="ibox float-e-margins">
                            <div class="col-md-12 offset-md-1">
                                <div class="ibox-title">
                                    <div class="ibox-tools">
                                        <a href="{{ route('usuarioschips.index') }}" class="btn btn-danger btn-sm">Cancelar</a>
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