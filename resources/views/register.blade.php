@extends('layouts.app')
@section('content')
    <form action="{{route('register') }}" method="POST">
        @csrf
        <div class="col-md-6 m-auto">
            <h4 class="form-section"><i class="ft-user"></i>Login</h4>
            <div class="row">
                <div class="form-group col-md-12 mb-2">
                    <label for="projectinput1">Correo electronico</label>
                    <input type="text"  class="form-control" placeholder="Correo electronico" name="email">
                    {!!$errors->first('email','<label id="name-error" class="error" for="name">:message</label>')!!}
                </div>
                <div class="form-group col-md-12 mb-2">
                    <label for="projectinput2">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Contraseña" name="password">
                    {!!$errors->first('password','<label id="name-error" class="error" for="name">:message</label>')!!}
                </div>
            </div>
            <div class="form-actions d-flex justify-content-between">
                <button type="submit" class="btn btn-warning mr-1"> 
                    Registrar
                </button>
                <a href="{{route('back')}}" class="btn btn-primary">
                    Cancelar
                </a>
            </div>
        </div>
    </form>
@endsection
