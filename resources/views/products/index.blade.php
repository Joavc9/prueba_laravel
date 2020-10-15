@extends('layouts.layout')
@section('content')
    <table class="table" id="products">
        <thead>
            <th>Name</th>
            <th>Descripción</th>
            <th>Imagen</th>
            <th>Categoría</th>
            <th>Precio</th>
            <th style="width: 20%">Acciones</th>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td><img src="{{ Storage::url($product->image) }}" alt="" width="70px"></td>
                    <td>{{ $product->getCategory->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <div>
                            <a class="btn btn-info btn-sm" href="{{ route('product.edit', $product->id) }}">Editar</a>
                            <a class="btn btn-danger btn-sm" data-id="{{$product->id}}" data-url="{{ route('product.delete')}}" onclick="deleteRegister(this)">Eliminar</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
