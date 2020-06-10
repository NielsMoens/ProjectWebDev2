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
            <form action="{{route('pages.editnewsblog', $newsblog->id)}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $newsblog->id }}">
                <div class="form-group">
                    <label for="posttitle_nl">posttitle_nl</label>
                    <textarea name="posttitle_nl" id="posttitle_nl">{{$newsblog->posttitle_nl}}</textarea>
                </div>
                <div class="form-group">
                    <label for="posttitle_en">posttitle_en</label>
                    <textarea name="posttitle_en" id="posttitle_en">{{$newsblog->posttitle_en}}</textarea>
                </div>
                <div class="form-group">
                    <label for="postcontent_nl">postcontent_nl</label>
                    <textarea name="postcontent_nl" id="postcontent_nl">{{$newsblog->postcontent_nl}}</textarea>
                </div>
                <div class="form-group">
                    <label for="postcontent_en">postcontent_en</label>
                    <textarea name="postcontent_en" id="postcontent_en">{{$newsblog->postcontent_en}}</textarea>
                </div>
                <div class="form-group">
                    <label for="postdate">postdate</label>
                    <input type="text" class="postdate" name="postdate" id="postdate" placeholder="Place date here"> {{$newsblog->postdate}}</input>
                </div>
                <button class="btn btn-danger" type="submit">
                    {{__('home.button')}}
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
