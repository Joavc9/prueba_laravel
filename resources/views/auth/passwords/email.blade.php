@extends('layouts.app')
@section('content')
    <div class="col-md-6 m-auto">
        @include('partials.alerts')
        <h4 class="form-section"><i class="ft-user"></i>Restablecer contraseña</h4>
        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-md-12 mb-2">
                    <label for="projectinput1">Correo electronico</label>
                    <input type="text" class="form-control" placeholder="Correo electronico" name="email" value="{{old('email')}}">
                    {!! $errors->first('email', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
            </div>
           <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-info text-white btn-sm">
                Restablecer contraseña
            </button>   
            <a href="{{route('back')}}" class="btn btn-warning">
                Cancelar
            </a>
           </div>
        </form>
    </div>
@endsection
