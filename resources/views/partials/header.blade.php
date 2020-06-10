<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Niels Moens</title>
    {{-- SCRIPTS --}}
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Font Awesome icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous">
    </script>

    <!-- Fonts CSS-->
    <link href="{{ asset('css/heading.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Header Content -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="{{route('home', app()->getLocale())}}"><i
                    class="fas fa-cubes"></i></a>
            <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-danger text-white rounded"
                type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="/">{{__('home.h_home')}}</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="{{ route('about', ['language' => app()->getLocale()])}}">{{__('home.h_about')}}</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="{{ route('contact', ['language' => app()->getLocale()])}}">Contact</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="{{ route('newsblog', ['language' => app()->getLocale()])}}">{{__('home.h_newsblog')}}</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="{{ route('donate', ['language' => app()->getLocale()])}}">{{__('home.h_donate')}}</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="{{ route('admin', ['language' => app()->getLocale()])}}">{{__('home.h_admin')}}</a>
                    </li>
                    {{-- <li class="nav-item mx-0 mx-lg-1">
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-globe-americas"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{route(Route::currentRouteName(), ['language'=>'nl'])}}">Nederlands</a>
                                <a class="dropdown-item" href="{{route(Route::currentRouteName(), ['language'=>'en'])}}">Engels</a>
                            </div>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
    <br>
