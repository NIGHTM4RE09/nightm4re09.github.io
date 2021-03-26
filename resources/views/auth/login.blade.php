@extends('layout.plantlogin')
@section('login')
<h3 class="text-center">Ecocel</h3>
	    <p class="login-box-msg">Ingresa tus datos para iniciar sesión</p>
                <div class="form-group has-feedback">
                    <form method="POST" action="{{ route('login') }}" class="form-element text-white">
                        @csrf
						<div class="form-group has-feedback">
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
							<span class="ion ion-email form-control-feedback text-white"></span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
						<div class="form-group has-feedback">
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
							<span class="ion ion-locked form-control-feedback text-white"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
                        <div class="form-group row mb-0">
                            <div class="col-12 text-center margin-top-10">
                                <button type="submit" class="btn btn-info btn-block margin-top-10">
                                    Iniciar Sesión
                                </button>
                            </div>
							<div class="col-6 margin-top-10">
						  		<div class="checkbox">
									<input type="checkbox" id="basic_checkbox_1">
									<label for="basic_checkbox_1">Recordarme</label>
						  		</div>
							</div>
                        </div>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        ¿Olvidaste tu contraseña?
                                    </a>
                                @endif --}}
                    </form>
                </div>
				<div class="margin-top-30 text-center">
					<p>Tu mejor compañero</p>
				</div>
@endsection
