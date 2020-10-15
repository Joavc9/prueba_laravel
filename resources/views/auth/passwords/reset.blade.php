@extends('layouts.app')
@section('content')
    <div class="col-md-6 m-auto">
        @include('partials.alerts')
        <h4 class="form-section"><i class="ft-user"></i>Login</h4>
        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="row">
                <div class="form-group col-md-12 mb-2">
                    <label for="projectinput1">Correo electronico</label>
                    <input type="text" class="form-control" placeholder="Correo electronico" name="email"
                        value="{{ $email ?? old('email') }}">
                    {!! $errors->first('email', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
                <div class="form-group col-md-12 mb-2">
                    <label for="projectinput2">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Contraseña" name="password">
                    {!! $errors->first('password', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
                <div class="form-group col-md-12 mb-2">
                    <label for="projectinput2">Confirmar contraseña</label>
                    <input type="password" class="form-control" placeholder="Contraseña" name="password_confirmation">
                </div>
            </div>
            <button type="submit" class="btn btn-info text-white btn-sm btn-block">
                Restablecer contraseña
            </button>
        </form>
    </div>
@endsection
