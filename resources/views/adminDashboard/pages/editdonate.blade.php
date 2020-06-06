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
            <h1>Edit Donate Page</h1>
        </div>
    </div>

    <!-- Content Wrapper -->
    <div class="row">
        <div class="col">
            <form action="{{route('pages.editdonate', $donate->id)}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $donate->id }}">
                <div class="form-group">
                    <label for="title_nl">title_nl</label>
                    <textarea name="title_nl" id="title_nl">{{$donate->title_nl}}</textarea>
                </div>
                <div class="form-group">
                    <label for="title_en">title_en</label>
                    <textarea name="title_en" id="title_en">{{$donate->title_en}}</textarea>
                </div>
                <div class="form-group">
                    <label for="subtitle_en">subtitle_en</label>
                    <textarea name="subtitle_en" id="subtitle_en">{{$donate->subtitle_en}}</textarea>
                </div>
                <div class="form-group">
                    <label for="subtitle_nl">subtitle_nl</label>
                    <textarea name="subtitle_nl" id="subtitle_nl">{{$donate->subtitle_nl}}</textarea>
                </div>
                <div class="form-group">
                    <label for="featuredtitle_nl">featuredtitle_nl</label>
                    <textarea name="featuredtitle_nl" id="featuredtitle_nl">{{$donate->featuredtitle_nl}}</textarea>
                </div>
                <div class="form-group">
                    <label for="featuredtitle_en">featuredtitle_en</label>
                    <textarea name="featuredtitle_en" id="featuredtitle_en">{{$donate->featuredtitle_en}}</textarea>
                </div>
                <div class="form-group">
                    <label for="featuredtitle_en">featuredtitle_en</label>
                    <textarea name="featuredtitle_en" id="featuredtitle_en">{{$donate->featuredtitle_en}}</textarea>
                </div>
                <button class="btn btn-danger" type="submit">
                    {{__('home.button')}}
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
