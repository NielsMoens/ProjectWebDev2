@extends('layout')

@section('content')
<!-- Home page Content -->
<header class="masthead bg-danger text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image--><img class="masthead-avatar mb-5" src={{ asset('images/remote_logo.png') }} alt="">
        <h1 class="masthead-heading mb-0">{!!$homeContent->{"title_".App::getLocale()}!!}</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-pastafarianism"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">
            {!!$homeContent->{"maininfo_".App::getLocale()}!!}
</p>
    </div>
</header>
@endsection


