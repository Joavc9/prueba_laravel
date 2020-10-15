@extends('layouts.layout')
@section('content')
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- eCommerce statistic -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-12">
                <h1>Bienvenido</h1>
                <div class="row">
                    <div class="col-md-12 card-header ml-1 mb-1">
                        <p>
                            <span class="text-info"> El ejercicio 1</span>
                            es toda la parte de login, registro y reseto de contraseña
                            para poder enviar el correo utilice una cuenta en mailtrap se debe crear la cuenta en mailtrap ya que es correos locales.
                            tener en cuenta esta configuración en el .env no lo subo ya que git lo ignora
                        <p class="text-left">
                            MAIL_DRIVER=smtp<br>
                            MAIL_HOST=smtp.mailtrap.io<br>
                            MAIL_PORT=2525<br>
                            MAIL_USERNAME=8287a6922f8a60 // aquì va tu user_name<br>
                            MAIL_PASSWORD=0fdc719756cf83 // aquì va tu mail_password<br>
                            MAIL_ENCRYPTION=null

                        </p>
                        </p>
                    </div>
                    <div class="col-md-3 card-header ml-1 mb-1">
                        <p>
                            <span class="text-info"> El ejercicio 2</span><br> esta en productos y categorías ya que un
                            producto
                            pertenece a una categoría con sus repectivos cruds
                        </p>
                    </div>
                    <div class="col-md-3 card-header ml-1 mb-1">
                        <p>
                            <span class="text-info"> El ejercicio 3</span><br>
                            Solo se puede registrar carpetas tal estructura està en la base de datos en una tabla llamada
                            folders, no se pueden
                            visualizar del lado cliente
                        </p>
                    </div>
                    <div class="col-md-4 card-header ml-1 mb-1" style="height: 200px; overflow-y: scroll">
                        <p>
                            <span class="text-info"> El ejercicio 4</span><br>
                            Se puede registrar una cotización con varios productos el porcentaje de la cotización lo he
                            puesto por defecto 20%, editar la cotización pero no se puede
                            editar el
                            precio del producto, se puede descargar pdf y enviar correo al cliente seleccionado al momento
                            de crear
                            la cotización los clientes se traen de la base de datos llamada clients que se llena
                            automaticamente por seeder y factory, para poder enviar el correo también utilice mailtrap.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
