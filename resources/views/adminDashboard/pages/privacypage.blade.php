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
            <h1>Make new page</h1>
        </div>
    </div>
    <!-- Content Wrapper -->
    <div class="row">
        <div class="col">
            <form action="{{route('pages.edit', $page->id)}}" method="post">
                @csrf

                <input type="hidden" name="id" value="{{ $page->id }}">
                <div class="form-group">
                    <label for="title_nl">Title_nl</label>
                    <input value="{{$page->title_nl}}" type="text" class="form-control" name="title_nl" id="title_nl"
                        placeholder="place title here">
                </div>
                <div class="form-group">
                    <label for="title_en">Title_en</label>
                    <input value="{{$page->title_en}}" type="text" class="form-control" name="title_en" id="title_en"
                        placeholder="place title here">
                </div>
                <div class="form-group">
                    <label for="Active">Actief</label>
                    <select class="form-control" id="active" name="active">
                        <option @if($page->active) selected @endif value="1"> page visible</option>
                        <option @if(!$page->active) selected @endif value="0">page not visible</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="intro_nl">Intro_nl</label>
                    <textarea name="intro_nl" id="intro_nl">{{$page->intro_nl}}</textarea>
                </div>
                <div class="form-group">
                    <label for="intro_en">Intro_en</label>
                    <textarea name="intro_en" id="intro_en">{{$page->intro_en}}</textarea>
                </div>
                <div class="form-group">
                    <label for="content_nl">Content_nl</label>
                    <textarea name="content_nl" id="content_nl">{{$page->content_nl}}</textarea>
                </div>
                <div class="form-group">
                    <label for="content_en"> Content_en</label>
                    <textarea name="content_en" id="content_en">{{$page->content_en}}</textarea>
                </div>
                <div class="form-group">
                    <label for="template">Template</label>
                    <input value="{{$page->template}}" type="text" class="form-control" name="template" id="template" placeholder="template">
                </div>

                <button class="btn btn-danger" type="submit">
                    {{__('home.button')}}
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
