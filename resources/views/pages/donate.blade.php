@extends('layout')

@section('content')


{{-- {{dd($donationInfo->donatoramount)}} --}}

<section style="min-height: 50vh;" class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h1 style="padding-top:40px;" class="section-heading text-uppercase">
                {!!$donateContent->{"title_".App::getLocale()}!!}</h1>
            <h3 style="padding-bottom:40px;" class="section-subheading text-muted">
                {!!$donateContent->{"subtitle_".App::getLocale()}!!}</h3>
        </div>

        <form action="" method="post">
            @csrf
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="name" type="text" name="donatorname" value=""
                            placeholder="{{__('home.name')}}" required="required"
                            data-validation-required-message="Please enter your name." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" type="email" name="donatoremail" value=""
                            placeholder="{{__('home.email')}}" required="required"
                            data-validation-required-message="Please enter your email address." />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-md-0">
                        <input class="form-control" name="donatoramount" value="" type="text"
                            placeholder="{{__('home.amount')}}" required="required"
                            data-validation-required-message="Please enter a amount" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group form-group-textarea mb-md-0">
                        <input class="form-control" id="message" name="donatormessage" value=""
                            placeholder="{{__('home.message')}}" required="required"
                            data-validation-required-message="Please enter a message.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button href="{{route('donate.payment', app()->getLocale())}}"
                    class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton"
                    type="submit">{{__('home.donate')}}</button>
            </div>
        </form>
        <div class="col-md-12">
            <div class="text-center">
                <h2 style="padding-top:40px;" class="section-heading text-uppercase">
                    {!!$donateContent->{"subtitle_".App::getLocale()}!!}</h2>
            </div>
            <div class="container">
                <div class=" row donors_featured owl-carousel owl-theme">
                    @foreach ($donationInfo as $donatorInfo)
                    <div class="item col-md-6">
                        <h3>{!!$donatorInfo->donatorname!!}</h3>
                        <p>{{__('home.donamount')}} {{$donatorInfo->donatornamount}}</p>
                        <p>{{__('home.donmessage')}} <span>{!!$donatorInfo->donatormessage!!}</span> </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div </div> </section> @endsection
