@extends('layouts.layout')
@section('content')
    <table class="table" id="products">
        <thead>
            <th>Name</th>
            <th style="width: 20%">Acciones</th>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                        <div>
                            <a class="btn btn-info btn-sm" href="{{ route('category.edit', $category->id) }}">Editar</a>
                            <a class="btn btn-danger btn-sm" data-id="{{$category->id}}" data-url="{{route('category.delete')}}" data-form="" onclick="deleteRegister(this)">Eliminar</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
