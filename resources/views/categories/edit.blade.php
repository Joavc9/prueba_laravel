@extends('layouts.layout')
@section('content')
    <form action="{{ route('category.update') }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        <input type="hidden" name="id" value="{{ $category->id }}">
        @csrf
        <div class="col-md-12">
            <h4 class="form-section">Editar categoría</h4>
            <div class="row">
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre de la categoría" name="name"
                        value="{{ $category->name }}">
                    {!! $errors->first('name', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
            </div>
        </div>
        <div class="form-actions text-right">
            <button type="submit" class="btn btn-warning">
                Actualizar
            </button>
        </div>
        </div>
    </form>
@endsection
