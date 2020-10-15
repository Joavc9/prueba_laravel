@extends('layouts.layout')
@section('content')
    <form action="{{ route('quotation.store') }}" method="POST">
        @csrf
        <div class="col-md-12">
            <h4 class="form-section">Registar cotización</h4>
            <div class="row">
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Cliente</label>
                    <select class="form-control" name="client">
                        <option value="">Seleccione el cliente</option>
                        @foreach ($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                        @endforeach
                    </select>
                    {!! $errors->first('client', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre de la cotización" name="name"
                        value="{{ old('name') }}">
                    {!! $errors->first('name', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
                <div class="form-group col-md-12 mb-1">
                    <label for="projectinput1">Descripción</label>
                    <input type="text" class="form-control" placeholder="Descripción de la cotización" name="description"
                        value="{{ old('description') }}">
                    {!! $errors->first('description', '<label id="name-error" class="error" for="name">:message</label>')
                    !!}
                </div>
                <div class="form-group col-md-12 mb-2">
                    <label for="projectinput1">Seleccione un producto</label>
                    <div class="card-header" style="overflow: scroll; height: 110px;">
                        @foreach ($products as $product)
                            <div class="row">
                                <input type="checkbox" value="{{ $product->id }}" name="products[]">
                                <div class="form-group col-md-4 mb-2">
                                    <label for="projectinput1">Nombre</label>
                                    <input type="text" disabled class="form-control"
                                        placeholder="Descripción de la cotización" name="name"
                                        value="{{ $product->name }} ">
                                </div>
                                <div class="form-group col-md-4 mb-2">
                                    <label for="projectinput1">Descripción</label>
                                    <input type="text" disabled class="form-control"
                                        placeholder="Descripción de la cotización" name="description"
                                        value="{{ $product->description }} ">
                                </div>
                                <div class="form-group col-md-3 mb-2">
                                    <label for="projectinput1">Precio</label>
                                    <input type="text" readonly class="form-control"
                                        placeholder="Descripción de la cotización" name="price"
                                        value="{{ $product->price }} ">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {!! $errors->first('products', '<label id="name-error" class="error" for="name">:message</label>') !!}
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
