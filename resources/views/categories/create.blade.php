@extends('layouts.layout')
@section('content')
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="col-md-12">
            <h4 class="form-section">Registar categoría</h4>
            <div class="row">
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre de la categoría" name="name"
                        value="{{ old('name') }}">
                    {!! $errors->first('name', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
            </div>
        </div>
        <div class="form-actions text-right">
            <button type="submit" class="btn btn-warning">
                Registrar
            </button>
        </div>
        </div>
    </form>
@endsection
