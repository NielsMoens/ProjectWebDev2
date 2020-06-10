@extends('layout')

@section('content')
<!-- Detail page Content -->
<div class="container"> 
    <h1 class="my-4">
        <br>
    </h1>
    <!-- Portfolio Item Row -->
    <div class="row">
        <input type="hidden" name="id" value="{{ $newsblogContent->id }}">
        <div class="col-md-8">
            <img class="img-fluid" src="http://placehold.it/750x500" alt="">
        </div>
        <div class="col-md-4">
        <h3 class="my-3">{!!$newsblogContent->{"posttitle_".App::getLocale()}!!}</h3>
            <p>{!!$newsblogContent->{"postcontent_".App::getLocale()}!!}</p>
            <span>{{__('home.postedon')}}: {{$newsblogContent->postdate}}</span>
        </div>
    </div>
</div>
<!-- /.container -->
@endsection
