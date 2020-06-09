@extends('layout')

@section('content')
<header class="masthead bg-danger text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <img class="masthead-avatar mb-5" src={{ asset('images/remote_logo.png') }} alt="">
        <h1 class="masthead-heading mb-0">{{__('home.subs')}}</h1>
</header>
@endsection


