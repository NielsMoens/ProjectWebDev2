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
            <h1>Edit Home Page</h1>
        </div>
    </div>
    <!-- Content Wrapper -->
    <div class="row">
        <div class="col">
            <form action="{{route('pages.edithome', $home->id)}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $home->id }}">
                <div class="form-group">
                    <label for="title_nl">title_nl</label>
                    <textarea name="title_nl" id="title_nl">{{$home->title_nl}}</textarea>
                </div>
                <div class="form-group">
                    <label for="title_en">title_en</label>
                    <textarea name="title_en" id="title_en">{{$home->title_en}}</textarea>
                </div>
                <div class="form-group">
                    <label for="maininfo_nl">maininfo_nl</label>
                    <textarea name="maininfo_nl" id="maininfo_nl">{{$home->maininfo_nl}}</textarea>
                </div>
                <div class="form-group">
                    <label for="maininfo_en">maininfo_en</label>
                    <textarea name="maininfo_en" id="maininfo_en">{{$home->maininfo_en}}</textarea>
                </div>
                <button class="btn btn-danger" type="submit">
                    {{__('home.button')}}
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
