@extends('layout')

@section('content')
<header class="masthead bg-danger text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image--><img class="masthead-avatar mb-5" src={{ asset('images/remote_logo.png') }} alt="">
        <!-- Masthead Heading-->
        <h1 class="masthead-heading mb-0">OctoRemote for OctoPrint</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-pastafarianism"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">
            The snappy web interface for your 3D printer. <br>
            Now available for android. <br>
            Access the Octoprint interface on any android device.
        </p>
    </div>
</header>
@endsection

