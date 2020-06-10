
@extends('layout')

@section('content')
<!-- Content About page -->
<div style="padding: 156px 0 100px;"class="bg-primary text-white">
    <div class="container text-center">
        <h1>{!!$aboutContent->{"title_".App::getLocale()}!!}</h1>
    </div>
</div>

<section style="padding:40px;" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>{!!$aboutContent->{"abouttitle_".App::getLocale()}!!}</h2>
                <p class="lead">{!!$aboutContent->{"aboutcontent_".App::getLocale()}!!}</p>
            </div>
        </div>
    </div>
</section>
@endsection
