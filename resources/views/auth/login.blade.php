@extends('layouts.auth')

@section('css')

<style>
    .invalid-feedback {
        display: block
    }
</style>
@endsection

@section('content')
<p class="login-box-msg">Inicia Sesión</p>

<form action="{{ route('login') }}" method="post">
    @csrf
    <div class="form-group">

        <div class="input-group">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">

        <div class="input-group">
            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                name="password" required autocomplete="current-password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="row">
        <div class="col-8">
            <div class="icheck-primary">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">
                    Recordar mis datos
                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Iniciar</button>
        </div>
        <!-- /.col -->
    </div>
</form>

<p class="mb-1">
    <a href="{{ route('password.request') }}">Soy bobo, olvidé mi contraseña</a>
</p>
<p class="mb-0">
    <a href="{{ route('register')}}" class="text-center">¿Eres Admin?, registrate</a>
</p>
@endsection