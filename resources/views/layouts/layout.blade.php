<!DOCTYPE html>
<!--
Template Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/modern_admin
Renew Support: https://1.envato.market/modern_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
        content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard eCommerce - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard</title>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-treeview.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/weather-icons/climacons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/meteocons/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/chartist.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/charts/chartist-plugin-tooltip.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.min.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/simple-line-icons/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/timeline.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-ecommerce.min.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    {{--
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"> --}}
    <!-- END: Custom CSS-->


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu"
    data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a
                            class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item"><a class="navbar-brand" href="{{ route('home') }}"><img class="brand-logo"
                                alt="modern admin logo" src="{{ asset('app-assets/images/logo/logo.png') }}">
                            <h3 class="brand-text">Prueba laravel</h3>
                        </a></li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
                            data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i
                                    class="ficon ft-maximize"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#"
                                data-toggle="dropdown"><span
                                    class="mr-1 user-name text-bold-700">{{ auth()->user()->email }}</span><span
                                    class="avatar avatar-online"><img
                                        src="{{ asset('app-assets/images/portrait/small/avatar-s-19.png') }}"
                                        alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a onclick="event.preventDefault();document.getElementById('form-logout').submit()"
                                    class="dropdown-item"><i class="ft-power"></i> Logout
                                </a>
                            </div>
                            <form method="POST" id="form-logout" action="{{ route('logout') }}" style="display:none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="{{ route('home') }}"><i class="la la-home"></i><span class="menu-title"
                            data-i18n="Dashboard">Inicio</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="icon-social-dropbox"></i><span class="menu-title"
                            data-i18n="Templates">Productos</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{ route('product.create') }}"><i></i><span
                                    data-i18n="Vertical">Crear</span></a>
                        </li>
                        <li><a class="menu-item" href="{{ route('products.index') }}"><i></i><span
                                    data-i18n="Horizontal">Listar</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title"
                            data-i18n="Templates">Categorías</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{ route('category.create') }}"><i></i><span
                                    data-i18n="Vertical">Crear</span></a>
                        </li>
                        <li><a class="menu-item" href="{{ route('categories.index') }}"><i></i><span
                                    data-i18n="Horizontal">Listar</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="icon-calculator"></i><span class="menu-title"
                            data-i18n="Templates">Cotizaciones</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{ route('quotation.create') }}"><i></i><span
                                    data-i18n="Vertical">Crear</span></a>
                        </li>
                        <li><a class="menu-item" href="{{ route('quotes.index') }}"><i></i><span
                                    data-i18n="Horizontal">Listar</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="icon-folder-alt"></i><span class="menu-title"
                            data-i18n="Templates">Carpetas</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{ route('folders.create') }}"><i></i><span
                                    data-i18n="Vertical">Crear</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            @include('partials.alerts')
            @include('partials.form')
            @yield('content')
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->
    <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-xl-block"><a class="customizer-close"
            href="#"><i class="ft-x font-medium-3"></i></a><a class="customizer-toggle bg-danger box-shadow-3"
            href="#"><i class="ft-settings font-medium-3 spinner white"></i></a>
        <div class="customizer-content p-2">
            <h4 class="text-uppercase mb-0">Theme Customizer</h4>
            <hr>
            <p>Customize & Preview in Real Time</p>
            <h5 class="mt-1 mb-1 text-bold-500">Menu Color Options</h5>
            <div class="form-group">
                <!-- Outline Button group -->
                <div class="btn-group customizer-sidebar-options" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-info" data-sidebar="menu-light">Light Menu</button>
                    <button type="button" class="btn btn-outline-info" data-sidebar="menu-dark">Dark Menu</button>
                </div>
            </div>
            <hr>
            <h5 class="mt-1 text-bold-500">Layout Options</h5>
            <ul class="nav nav-tabs nav-underline nav-justified layout-options">
                <li class="nav-item">
                    <a class="nav-link layouts active" id="baseIcon-tab21" data-toggle="tab" aria-controls="tabIcon21"
                        href="#tabIcon21" aria-expanded="true">Layouts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navigation" id="baseIcon-tab22" data-toggle="tab" aria-controls="tabIcon22"
                        href="#tabIcon22" aria-expanded="false">Navigation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar" id="baseIcon-tab23" data-toggle="tab" aria-controls="tabIcon23"
                        href="#tabIcon23" aria-expanded="false">Navbar</a>
                </li>
            </ul>
            <div class="tab-content px-1 pt-1">
                <div role="tabpanel" class="tab-pane active" id="tabIcon21" aria-expanded="true"
                    aria-labelledby="baseIcon-tab21">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" name="collapsed-sidebar"
                            id="collapsed-sidebar">
                        <label class="custom-control-label" for="collapsed-sidebar">Collapsed Menu</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" name="fixed-layout" id="fixed-layout">
                        <label class="custom-control-label" for="fixed-layout">Fixed Layout</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" name="boxed-layout" id="boxed-layout">
                        <label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" name="static-layout" id="static-layout">
                        <label class="custom-control-label" for="static-layout">Static Layout</label>
                    </div>
                </div>
                <div class="tab-pane" id="tabIcon22" aria-labelledby="baseIcon-tab22">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" name="native-scroll" id="native-scroll">
                        <label class="custom-control-label" for="native-scroll">Native Scroll</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" name="right-side-icons"
                            id="right-side-icons">
                        <label class="custom-control-label" for="right-side-icons">Right Side Icons</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" name="bordered-navigation"
                            id="bordered-navigation">
                        <label class="custom-control-label" for="bordered-navigation">Bordered Navigation</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" name="flipped-navigation"
                            id="flipped-navigation">
                        <label class="custom-control-label" for="flipped-navigation">Flipped Navigation</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" name="collapsible-navigation"
                            id="collapsible-navigation">
                        <label class="custom-control-label" for="collapsible-navigation">Collapsible Navigation</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" name="static-navigation"
                            id="static-navigation">
                        <label class="custom-control-label" for="static-navigation">Static Navigation</label>
                    </div>
                </div>
                <div class="tab-pane" id="tabIcon23" aria-labelledby="baseIcon-tab23">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" name="brand-center" id="brand-center">
                        <label class="custom-control-label" for="brand-center">Brand Center</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" name="navbar-static-top"
                            id="navbar-static-top">
                        <label class="custom-control-label" for="navbar-static-top">Static Top</label>
                    </div>
                </div>
            </div>
            <hr>
            <h5 class="mt-1 text-bold-500">Navigation Color Options</h5>
            <ul class="nav nav-tabs nav-underline nav-justified color-options">
                <li class="nav-item w-100">
                    <a class="nav-link nav-semi-light active" id="color-opt-1" data-toggle="tab" aria-controls="clrOpt1"
                        href="#clrOpt1" aria-expanded="false">Semi Light</a>
                </li>
                <li class="nav-item  w-100">
                    <a class="nav-link nav-semi-dark" id="color-opt-2" data-toggle="tab" aria-controls="clrOpt2"
                        href="#clrOpt2" aria-expanded="false">Semi Dark</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-dark" id="color-opt-3" data-toggle="tab" aria-controls="clrOpt3"
                        href="#clrOpt3" aria-expanded="false">Dark</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-light" id="color-opt-4" data-toggle="tab" aria-controls="clrOpt4"
                        href="#clrOpt4" aria-expanded="true">Light</a>
                </li>
            </ul>
            <div class="tab-content px-1 pt-1">
                <div role="tabpanel" class="tab-pane active" id="clrOpt1" aria-expanded="true"
                    aria-labelledby="color-opt-1">
                    <div class="row">
                        <div class="col-6">
                            <h6>Solid</h6>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input bg-blue-grey"
                                    data-bg="bg-blue-grey" id="default">
                                <label class="custom-control-label" for="default">Default</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input bg-primary"
                                    data-bg="bg-primary" id="primary">
                                <label class="custom-control-label" for="primary">Primary</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input bg-danger"
                                    data-bg="bg-danger" id="danger">
                                <label class="custom-control-label" for="danger">Danger</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input bg-success"
                                    data-bg="bg-success" id="success">
                                <label class="custom-control-label" for="success">Success</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input bg-blue"
                                    data-bg="bg-blue" id="blue">
                                <label class="custom-control-label" for="blue">Blue</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input bg-cyan"
                                    data-bg="bg-cyan" id="cyan">
                                <label class="custom-control-label" for="cyan">Cyan</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input bg-pink"
                                    data-bg="bg-pink" id="pink">
                                <label class="custom-control-label" for="pink">Pink</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <h6>Gradient</h6>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-slight-clr" checked
                                    class="custom-control-input bg-blue-grey" data-bg="bg-gradient-x-grey-blue"
                                    id="bg-gradient-x-grey-blue">
                                <label class="custom-control-label" for="bg-gradient-x-grey-blue">Default</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input bg-primary"
                                    data-bg="bg-gradient-x-primary" id="bg-gradient-x-primary">
                                <label class="custom-control-label" for="bg-gradient-x-primary">Primary</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input bg-danger"
                                    data-bg="bg-gradient-x-danger" id="bg-gradient-x-danger">
                                <label class="custom-control-label" for="bg-gradient-x-danger">Danger</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input bg-success"
                                    data-bg="bg-gradient-x-success" id="bg-gradient-x-success">
                                <label class="custom-control-label" for="bg-gradient-x-success">Success</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input bg-blue"
                                    data-bg="bg-gradient-x-blue" id="bg-gradient-x-blue">
                                <label class="custom-control-label" for="bg-gradient-x-blue">Blue</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input bg-cyan"
                                    data-bg="bg-gradient-x-cyan" id="bg-gradient-x-cyan">
                                <label class="custom-control-label" for="bg-gradient-x-cyan">Cyan</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input bg-pink"
                                    data-bg="bg-gradient-x-pink" id="bg-gradient-x-pink">
                                <label class="custom-control-label" for="bg-gradient-x-pink">Pink</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="clrOpt2" aria-labelledby="color-opt-2">
                    <div class="custom-control custom-radio mb-1">
                        <input type="radio" name="nav-sdark-clr" checked class="custom-control-input bg-default"
                            data-bg="bg-default" id="opt-default">
                        <label class="custom-control-label" for="opt-default">Default</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                        <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-primary"
                            data-bg="bg-primary" id="opt-primary">
                        <label class="custom-control-label" for="opt-primary">Primary</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                        <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-danger"
                            data-bg="bg-danger" id="opt-danger">
                        <label class="custom-control-label" for="opt-danger">Danger</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                        <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-success"
                            data-bg="bg-success" id="opt-success">
                        <label class="custom-control-label" for="opt-success">Success</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                        <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-blue" data-bg="bg-blue"
                            id="opt-blue">
                        <label class="custom-control-label" for="opt-blue">Blue</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                        <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan"
                            id="opt-cyan">
                        <label class="custom-control-label" for="opt-cyan">Cyan</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                        <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-pink" data-bg="bg-pink"
                            id="opt-pink">
                        <label class="custom-control-label" for="opt-pink">Pink</label>
                    </div>
                </div>
                <div class="tab-pane" id="clrOpt3" aria-labelledby="color-opt-3">
                    <div class="row">
                        <div class="col-6">
                            <h3>Solid</h3>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-dark-clr" class="custom-control-input bg-blue-grey"
                                    data-bg="bg-blue-grey" id="solid-blue-grey">
                                <label class="custom-control-label" for="solid-blue-grey">Default</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-dark-clr" class="custom-control-input bg-primary"
                                    data-bg="bg-primary" id="solid-primary">
                                <label class="custom-control-label" for="solid-primary">Primary</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-dark-clr" class="custom-control-input bg-danger"
                                    data-bg="bg-danger" id="solid-danger">
                                <label class="custom-control-label" for="solid-danger">Danger</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-dark-clr" class="custom-control-input bg-success"
                                    data-bg="bg-success" id="solid-success">
                                <label class="custom-control-label" for="solid-success">Success</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-dark-clr" class="custom-control-input bg-blue"
                                    data-bg="bg-blue" id="solid-blue">
                                <label class="custom-control-label" for="solid-blue">Blue</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-dark-clr" class="custom-control-input bg-cyan"
                                    data-bg="bg-cyan" id="solid-cyan">
                                <label class="custom-control-label" for="solid-cyan">Cyan</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-dark-clr" class="custom-control-input bg-pink"
                                    data-bg="bg-pink" id="solid-pink">
                                <label class="custom-control-label" for="solid-pink">Pink</label>
                            </div>
                        </div>

                        <div class="col-6">
                            <h3>Gradient</h3>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-dark-clr" class="custom-control-input bg-blue-grey"
                                    data-bg="bg-gradient-x-grey-blue" id="bg-gradient-x-grey-blue1">
                                <label class="custom-control-label" for="bg-gradient-x-grey-blue1">Default</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-primary"
                                    data-bg="bg-gradient-x-primary" id="bg-gradient-x-primary1">
                                <label class="custom-control-label" for="bg-gradient-x-primary1">Primary</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-danger"
                                    data-bg="bg-gradient-x-danger" id="bg-gradient-x-danger1">
                                <label class="custom-control-label" for="bg-gradient-x-danger1">Danger</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-success"
                                    data-bg="bg-gradient-x-success" id="bg-gradient-x-success1">
                                <label class="custom-control-label" for="bg-gradient-x-success1">Success</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-blue"
                                    data-bg="bg-gradient-x-blue" id="bg-gradient-x-blue1">
                                <label class="custom-control-label" for="bg-gradient-x-blue1">Blue</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-cyan"
                                    data-bg="bg-gradient-x-cyan" id="bg-gradient-x-cyan1">
                                <label class="custom-control-label" for="bg-gradient-x-cyan1">Cyan</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-pink"
                                    data-bg="bg-gradient-x-pink" id="bg-gradient-x-pink1">
                                <label class="custom-control-label" for="bg-gradient-x-pink1">Pink</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="clrOpt4" aria-labelledby="color-opt-4">
                    <div class="custom-control custom-radio mb-1">
                        <input type="radio" name="nav-light-clr" class="custom-control-input bg-blue-grey"
                            data-bg="bg-blue-grey bg-lighten-4" id="light-blue-grey">
                        <label class="custom-control-label" for="light-blue-grey">Default</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                        <input type="radio" name="nav-light-clr" class="custom-control-input bg-primary"
                            data-bg="bg-primary bg-lighten-4" id="light-primary">
                        <label class="custom-control-label" for="light-primary">Primary</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                        <input type="radio" name="nav-light-clr" class="custom-control-input bg-danger"
                            data-bg="bg-danger bg-lighten-4" id="light-danger">
                        <label class="custom-control-label" for="light-danger">Danger</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                        <input type="radio" name="nav-light-clr" class="custom-control-input bg-success"
                            data-bg="bg-success bg-lighten-4" id="light-success">
                        <label class="custom-control-label" for="light-success">Success</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                        <input type="radio" name="nav-light-clr" class="custom-control-input bg-blue"
                            data-bg="bg-blue bg-lighten-4" id="light-blue">
                        <label class="custom-control-label" for="light-blue">Blue</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                        <input type="radio" name="nav-light-clr" class="custom-control-input bg-cyan"
                            data-bg="bg-cyan bg-lighten-4" id="light-cyan">
                        <label class="custom-control-label" for="light-cyan">Cyan</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                        <input type="radio" name="nav-light-clr" class="custom-control-input bg-pink"
                            data-bg="bg-pink bg-lighten-4" id="light-pink">
                        <label class="custom-control-label" for="light-pink">Pink</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Customizer-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
                class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a
                    class="text-bold-800 grey darken-2"></span></p>
    </footer>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/charts/chartist.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/charts/raphael-min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/charts/morris.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/timeline/horizontal-timeline.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/customizer.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/footer.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/dashboard-ecommerce.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <!-- END: Page JS-->

    <!-- BEGIN: Sweet alert-->
    <script src="{{ asset('assets/sweetAlert/sweetAlert.min.js') }}"></script>
    <!-- END: Sweet alert-->
    <!-- BEGIN JS -->
    <script src="{{ asset('assets/js/bootstrap-treeview.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- END JS -->

</body>
<!-- END: Body-->

</html>
