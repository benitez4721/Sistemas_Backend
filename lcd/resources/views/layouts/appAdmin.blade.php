<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AdminLTE 3</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="/dist/js/adminlte.js"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/dist/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div id="app">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <!-- SEARCH FORM -->
                <form class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="{{ url('/') }}" class="brand-link">
                    <img src="/dist/img/LDCLogo1.png" alt="LDC Logo" class="brand-image img-circle elevation-3"
                        style="opacity: .8">
                    <span class="brand-text font-weight-light">LDC</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">

                                @guest
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                                @else

                                <nav class="mt-2">
                                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                        data-accordion="false">
                                        <li style="color: red">Administrador</li>
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                {{ Auth::user()->name }}
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="{{route('perfil.create')}}"
                                                        class="{{ Request::path() === 'perfil/todas' ? 'nav-link active' : 'nav-link' }}">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Crear Perfil</p>

                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="perfil/todas"
                                                        class="{{ Request::path() === 'perfil/todas' ? 'nav-link active' : 'nav-link' }}">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Modificar Perfil</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="perfil/todas"
                                                        class="{{ Request::path() === 'perfil/todas' ? 'nav-link active' : 'nav-link' }}">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Eliminar Perfil</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                @endguest

                            </a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">

                            <li class="nav-item">
                                <a href="/" class="{{ Request::path() === '/' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>Inicio</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <nav class="mt-2">
                                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                        data-accordion="false">
                                        <li class="nav-item has-treeview">
                                            <a href="preparadores"
                                                class="{{ Request::path() === 'preparadores' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-users"></i>
                                                <p>
                                                    Preparadores
                                                    <?php use App\Preparador; $preparadores_count = Preparador::all()->count(); ?>
                                                    <span class="right badge badge-danger">{{ $preparadores_count ?? '0' }}</span>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="preparadores"
                                                        class="{{ Request::path() === 'perfil/todas' ? 'nav-link active' : 'nav-link' }}">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Perfiles</p>

                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="perfil/todas"
                                                        class="{{ Request::path() === 'perfil/todas' ? 'nav-link active' : 'nav-link' }}">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Horarios</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </li>

                            <li class="nav-item">
                                <nav class="mt-2">
                                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                        data-accordion="false">
                                        <li class="nav-item has-treeview">
                                            <a href="salas"
                                                class="{{ Request::path() === 'salas' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-users"></i>
                                                <p>Salas</p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="salas/todas"
                                                        class="{{ Request::path() === 'salas/todas' ? 'nav-link active' : 'nav-link' }}">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Solicitar</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{route('salas.index')}}"
                                                        class="{{ Request::path() === 'salas/todas' ? 'nav-link active' : 'nav-link' }}">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Mostrar</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{route('salas.create')}}"
                                                        class="{{ Request::path() === 'salas/todas' ? 'nav-link active' : 'nav-link' }}">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Agregar</p>

                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="salas/todas"
                                                        class="{{ Request::path() === 'salas/todas' ? 'nav-link active' : 'nav-link' }}">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Actualizar Recursos</p>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </li>


                            <li class="nav-item">
                                <nav class="mt-2">
                                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                        data-accordion="false">
                                        <li class="nav-item has-treeview">
                                            <a href="preparadores"
                                                class="{{ Request::path() === 'preparadores' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-users"></i>
                                                <p>Maquinas</p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="salas/todas"
                                                        class="{{ Request::path() === 'salas/todas' ? 'nav-link active' : 'nav-link' }}">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>MYS223: Sala Ernesto Leal</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="salas/todas"
                                                        class="{{ Request::path() === 'salas/todas' ? 'nav-link active' : 'nav-link' }}">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>MYSXXX: Sala Ken Thompson</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="salas/todas"
                                                        class="{{ Request::path() === 'salas/todas' ? 'nav-link active' : 'nav-link' }}">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>MYSXXX: Sala Jorge Baralt</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </li>

                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">

                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <!-- NO QUITAR -->
                <strong>
                    <div class="float-right d-none d-sm-inline-block">
                        <b>Version</b> 1.0
                    </div>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
    </div>
</body>

</html>
