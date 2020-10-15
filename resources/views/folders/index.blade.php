@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div id="treeview"></div>
        </div>
        <div class="col-md-6">
            <form action="{{ route('folder.store') }}" method="POST" id="form-folder">
                @csrf
                <div class="col-md-12">
                    <h4 class="form-section">Registar carpeta</h4>
                    <div class="row">
                        <div class="form-group col-md-12 mb-2">
                            <label for="projectinput1">Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre del producto" name="name"
                                value="{{ old('name') }}">
                            {!! $errors->first('name', '<label id="name-error" class="error" for="name">:message</label>')
                            !!}
                        </div>
                        <div class="form-group col-md-12 mb-2">
                            <label for="projectinput1">Carpeta</label>
                            <select class="form-control" name="parent">
                                <option value="">Seleccione una carpeta</option>
                                @foreach ($folders as $folder)
                                    <option value="{{$folder->id}}">{{$folder->name}}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('parent', '<label id="name-error" class="error"
                                for="name">:message</label>') !!}
                        </div>
                    </div>
                    <div class="form-actions text-right">
                        <button type="submit" data-form="form-folder" class="btn btn-warning">
                            Registrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
