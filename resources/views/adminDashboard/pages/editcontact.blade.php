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
            <h1>Edit Contact Page</h1>
        </div>
    </div>
    <!-- Content Wrapper -->
    <div class="row">
        <div class="col">
            <form action="{{route('pages.editcontact', $contact->id)}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $contact->id }}">
                <div class="form-group">
                    <label for="title_nl">title_nl</label>
                    <textarea name="title_nl" id="title_nl">{{$contact->title_nl}}</textarea>
                </div>
                <div class="form-group">
                    <label for="title_en">title_en</label>
                    <textarea name="title_en" id="title_en">{{$contact->title_en}}</textarea>
                </div>
                <div class="form-group">
                    <label for="subtitle_en">subtitle_en</label>
                    <textarea name="subtitle_en" id="subtitle_en">{{$contact->subtitle_en}}</textarea>
                </div>
                <div class="form-group">
                    <label for="subtitle_nl">subtitle_nl</label>
                    <textarea name="subtitle_nl" id="subtitle_nl">{{$contact->subtitle_nl}}</textarea>
                </div>
                <div class="form-group">
                    <label for="content_nl">content_nl</label>
                    <textarea name="content_nl" id="content_nl">{{$contact->content_nl}}</textarea>
                </div>
                <div class="form-group">
                    <label for="content_en">content_en</label>
                    <textarea name="content_en" id="content_en">{{$contact->content_en}}</textarea>
                </div>
                <button class="btn btn-danger" type="submit">
                    {{__('home.button')}}
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
