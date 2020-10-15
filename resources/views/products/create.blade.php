@extends('layouts.layout')
@section('content')
    <form action="{{route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-12">
            <h4 class="form-section">Registar producto</h4>
            <div class="row">
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Nombre</label>
                    <input type="text"  class="form-control" placeholder="Nombre del producto" name="name" value="{{old('name')}}">
                    {!!$errors->first('name','<label id="name-error" class="error" for="name">:message</label>')!!}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Descripción</label>
                    <input type="text"  class="form-control" placeholder="Descripción del producto" name="description" value="{{old('description')}}">
                    {!!$errors->first('description','<label id="name-error" class="error" for="name">:message</label>')!!}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Imagen</label>
                    <input type="file"  class="form-control" name="image">
                    {!!$errors->first('image','<label id="name-error" class="error" for="name">:message</label>')!!}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Precio</label>
                    <input type="number"  class="form-control" placeholder="Precio del producto" name="price" value="{{old('price')}}">
                    {!!$errors->first('price','<label id="name-error" class="error" for="name">:message</label>')!!}
                </div>
                <div class="form-group col-md-12 mb-2">
                    @if($categories->count() > 0)
                    <label for="projectinput1">Categoría</label>
                    <select class="form-control" placeholder="Precio del producto" name="category">
                        <option value="">Seleccione una categoría</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    {!!$errors->first('category','<label id="name-error" class="error" for="name">:message</label>')!!}
                    @else
                    <div class="form-actions">
                        <a href="{{route('category.create')}}" class="btn btn-warning"> 
                            Crear categoría
                        </a>
                    </div>
                    @endif
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
