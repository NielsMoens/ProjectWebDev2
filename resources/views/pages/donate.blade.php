@extends('layout')

@section('content')
<section style="min-height: 50vh;" class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h1 style="padding-top:40px;" class="section-heading text-uppercase">{!!$donateContent->{"title_".App::getLocale()}!!}</h1>
            <h3 style="padding-bottom:40px;" class="section-subheading text-muted">{!!$donateContent->{"subtitle_".App::getLocale()}!!}</h3>
        </div>

        <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="name" type="text" placeholder="{{__('home.name')}}" required="required"
                            data-validation-required-message="Please enter your name." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" type="email" placeholder="{{__('home.email')}}"
                            required="required" data-validation-required-message="Please enter your email address." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group mb-md-0">
                        <input class="form-control" id="phone" type="tel" placeholder="{{__('home.phone')}}" required="required"
                            data-validation-required-message="Please enter your phone number." />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea style="height:150px;" class="form-control" id="message" placeholder="{{__('home.message')}}"
                            required="required" data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">{{__('home.donate')}}</button>
            </div>
                <div class="col-md-12">
                    <div class="text-center">
                        <h2 style="padding-top:40px;" class="section-heading text-uppercase">{!!$donateContent->{"subtitle_".App::getLocale()}!!}</h2>
                    </div>
                    <div class="container">
                        <div class=" row donors_featured owl-carousel owl-theme">
                            <div class="item col-md-6">
                                <img src="img/donors_featured_one.jpg" alt="">
                                <h3>{!!$donateContent->donatorname!!}</h3>
                            <p>{{__('home.donamount')}} <span>{!!$donateContent->donationamount!!}</span> </p>
                            </div>
                            <div class="item col-md-6">
                                <img src="img/donors_featured_one.jpg" alt="">
                                <h3>{!!$donateContent->donatorname!!}</h3>
                                <p>{{__('home.donamount')}} <span>{!!$donateContent->donationamount!!}</span> </p>
                            </div>
                        </div>
                    </div>

                </div>
            
           
        </form>
    </div>
</section>

@endsection
