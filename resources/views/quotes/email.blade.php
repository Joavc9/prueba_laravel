<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Señor: {{ $quote->getClient->name }} esta es su cotización adjuntada</h1>
        <div class="row">
            <a class="btn btn-info btn-sm" href="{{ route('quotation.download', $quote->id) }}">
                descargar pdf
            </a>
        </div>
    </div>
</body>

</html>
