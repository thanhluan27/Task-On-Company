<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News | Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
    <!-- Google Font: Source Sans Pro -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!-- Ionicons -->

    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('css/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('css/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('css/summernote-bs4.min.css') }}">
    <!--  -->


</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('img/icon/reload.png') }}" alt="Logo admin" height="100" width="100">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><strong>=</strong></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/post') }}" class="nav-link"> <img src="{{ asset('img/icon/home.png') }}" alt="" style="width: 30px; height: 30px;">
                        Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link"> <img src="{{ asset('img/icon/operator.png') }}" alt="" style="width: 30px; height: 30px;">
                        Contact</a>
                </li>
                <!-- search -->
                <form method="get" action="{{ route('search') }}" class="d-flex" role="search">
                    <input id="keyword" class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" value="{{ isset($search) ? $search : ''}}">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <div class="btn-group">
                    <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <strong>Profile</strong>
                    </button>
                    <div class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('signout') }}">Log out</a></li>
                    </div>
                </div>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <img src="{{ asset('img/icon/fullscreen.png') }}" alt="" style="width: 30px; height: 30px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <img src="{{ asset('img/icon/settings.png') }}" alt="" style="width: 30px; height: 30px;">
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        @yield('content')
