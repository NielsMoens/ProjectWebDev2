
@extends('layout')

@section('content')
<section style="min-height: 50vh;" class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h1 style="padding-top:40px;" class="section-heading text-uppercase">{!!$contactContent->{"title_".App::getLocale()}!!}</h1>
            <h3 style="padding-bottom:40px;" class="section-subheading text-muted">{!!$contactContent->{"subtitle_".App::getLocale()}!!}</h3>
        </div>

        <div style="width: 100%"><iframe width="100%" height="500" src="https://maps.google.com/maps?width=100%&height=600&hl=nl&q=Ghent+(OctoRemote)&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/nl/cirkel-straal-kaart/">Cirkel op kaart Google</a></iframe></div><br/>
        <form action="" method="post">
            @csrf
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="name" class="form-control" id="name" type="text" placeholder="{{__('home.name')}}" required="required"/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input name="email" class="form-control" id="email" type="email" placeholder="{{__('home.email')}}" required="required"/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group mb-md-0">
                        <input name="phone" class="form-control" id="phone" type="tel" placeholder="{{__('home.phone')}}" required="required"/>
                        <p class="help-block text-danger"></p>
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-md-0">
                        <input name="subject" class="form-control" id="subject" type="text" placeholder="{{__('home.subject')}}" required="required"  />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea style="height:97px;" name="desci" class="form-control" id="desci" placeholder="{{__('home.message')}}" required="required"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit" >{{__('home.button')}}</button>
            </div>
        </form>
    </div>
</section>
@endsection


