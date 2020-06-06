@extends('layouts.app')

@section('scripts')
<script>
    tinymce.init({
        selector: 'textarea',
        height: "500"
    });
    
</script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Edit About Page</h1>
        </div>
    </div>
    <!-- Content Wrapper -->
    <div class="row">
        <div class="col">
            <form action="{{route('pages.editabout', $about->id)}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $about->id }}">
                <div class="form-group">
                    <label for="title_nl">title_nl</label>
                    <textarea name="title_nl" id="title_nl">{{$about->title_nl}}</textarea>
                </div>
                <div class="form-group">
                    <label for="title_en">title_en</label>
                    <textarea name="title_en" id="title_en">{{$about->title_en}}</textarea>
                </div>
                <div class="form-group">
                    <label for="abouttitle_nl">abouttitle_nl</label>
                    <textarea name="abouttitle_nl" id="abouttitle_nl">{{$about->subtitle_en}}</textarea>
                </div>
                <div class="form-group">
                    <label for="abouttitle_en">abouttitle_en</label>
                    <textarea name="abouttitle_en" id="abouttitle_en">{{$about->abouttitle_en}}</textarea>
                </div>
                <div class="form-group">
                    <label for="aboutcontent_nl">aboutcontent_nl</label>
                    <textarea name="aboutcontent_nl" id="aboutcontent_nl">{{$about->aboutcontent_nl}}</textarea>
                </div>
                <div class="form-group">
                    <label for="aboutcontent_en">aboutcontent_en</label>
                    <textarea name="aboutcontent_en" id="aboutcontent_en">{{$about->aboutcontent_en}}</textarea>
                </div>
                <button class="btn btn-danger" type="submit">
                    {{__('home.button')}}
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
