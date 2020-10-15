@extends('layouts.app')
@section('content')
    <div class="col-md-6 m-auto">
        <h4 class="form-section"><i class="ft-user"></i>Login</h4>
        <div class="row">
            <div class="form-group col-md-12 mb-2">
                <label for="projectinput1">Correo electronico</label>
                <input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="fname">
            </div>
            <div class="form-group col-md-12 mb-2">
                <label for="projectinput2">Contraseña</label>
                <input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="lname">
            </div>
        </div>
        <div class="form-actions d-flex justify-content-between">
            <a type="button" class="btn btn-warning text-white"> 
                Iniciar sesión
            </a>
            <a type="submit" href="{{route('user.create')}}" class="btn btn-primary text-white">
                Registrarse
            </a>
            <a type="submit" class="btn btn-primary text-white">
                Recuperar Contraseña
            </a>
        </div>
    </div>
@endsection
