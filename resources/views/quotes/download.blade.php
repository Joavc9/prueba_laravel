<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="card-header">
        <h1>Prueba laravel</h1>
    </div>
    <h3 class="text-center">Cotización</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Cotización</th>
                <th>Descripción</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $quote->getClient->name }}</td>
                <td>{{ $quote->name }}</td>
                <td>{{ $quote->description }}</td>
                <td>{{ $quote->total }}</td>
            </tr>
        </tbody>
    </table>
    <div class="form-group col-md-12 mb-2">
        <label for="projectinput1">Lista productos</label>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Descripción</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($quote->products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->getCategory->name }}</td>
                        <td>{{ $product->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
