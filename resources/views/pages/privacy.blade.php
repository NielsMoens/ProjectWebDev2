@extends('layout')

@section('content')
<!-- Privacy page Content -->
<div style="padding: 156px 0 100px;"class="bg-primary text-white">
    <div class="container text-center">
        <h1>{!!$privacyContent->{"title_".App::getLocale()}!!}</h1>
    </div>
</div>

<section style="padding:40px;" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>{!!$privacyContent->{"subtitle_".App::getLocale()}!!}</h2>
                <p class="lead">{!!$privacyContent->{"content_".App::getLocale()}!!}</p>
                
            </div>
        </div>
    </div>
</section>
@endsection