@extends('layouts.layout')
@section('content')
    <table class="table" id="products">
        <thead>
            <th>Name</th>
            <th>Descripción</th>
            <th>total</th>
            <th>Cliente</th>
            <th style="width: 25%">Acciones</th>
        </thead>
        <tbody>
            @foreach ($quotes as $quote)
                <tr>
                    <td>{{ $quote->name }}</td>
                    <td>{{ $quote->description }}</td>
                    <td>{{ $quote->total }}</td>
                    <td>{{ $quote->getClient->name }}</td>
                    <td>
                        <div>
                            <a class="btn btn-info btn-sm" href="{{ route('quotation.edit', $quote->id) }}">Editar</a>
                            <a class="btn btn-danger btn-sm" data-id="{{ $quote->id }}"
                                data-url="{{ route('quotation.delete') }}" onclick="deleteRegister(this)">Eliminar</a>
                            <a class="btn btn-info btn-sm" href="{{ route('quotation.download', $quote->id) }}">
                                <i class="ft-download text-white"></i>
                            </a>
                            <a class="btn btn-info btn-sm" href="{{ route('quotation.send', $quote->id) }}">
                                <i class="ft-mail text-white"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
