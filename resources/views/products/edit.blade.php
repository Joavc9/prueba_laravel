@extends('layouts.layout')
@section('content')
    <form action="{{ route('product.update') }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        <input type="hidden" name="id" value="{{ $product->id }}">
        @csrf
        <div class="col-md-12">
            <h4 class="form-section">Editar producto</h4>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <img src="{{ Storage::url($product->image) }}" alt="" width="200px">
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre del producto" name="name"
                        value="{{ $product->name }}">
                    {!! $errors->first('name', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Descripción</label>
                    <input type="text" class="form-control" placeholder="Descripción del producto" name="description" value=" {{$product->description}}">
                    {!! $errors->first('description', '<label id="name-error" class="error" for="name">:message</label>')
                    !!}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Imagen</label>
                    <input type="file" class="form-control" name="image">
                    {!! $errors->first('image', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Precio</label>
                    <input type="number" class="form-control" placeholder="Precio del producto" name="price"
                        value="{{ $product->price }}">
                    {!! $errors->first('price', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
                <div class="form-group col-md-12 mb-2">
                    <label for="projectinput1">Categoría</label>
                    <select class="form-control" placeholder="Precio del producto" name="category">
                        <option value="">Seleccione una categoría</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $product->category ? 'selected' : '' }}>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                    {!! $errors->first('category', '<label id="name-error" class="error" for="name">:message</label>') !!}
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
