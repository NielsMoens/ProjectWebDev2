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
            <h1>Make New Newsblog Post</h1>
        </div>
    </div>
    <!-- Content Wrapper -->
    <div class="row">
        <div class="col">
            <form action="{{route('pages.addnewsblog')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="posttitle_nl">posttitle_nl</label>
                    <input type="text" class="form-control" name="posttitle_nl" id="posttitle_nl"
                        placeholder="Plaats de titel hier">
                </div>
                <div class="form-group">
                    <label for="posttitle_en">posttitle_en</label>
                    <input type="text" class="form-control" name="posttitle_en" id="posttitle_en"
                        placeholder="Place title here">
                </div>
                <div class="form-group">
                    <label for="postcontent_nl">postcontent_nl</label>
                    <textarea name="postcontent_nl" id="postcontent_nl"></textarea>
                </div>
                <div class="form-group">
                    <label for="postcontent_en">postcontent_en</label>
                    <textarea name="postcontent_en" id="postcontent_en" ></textarea>
                </div>
                <div class="form-group">
                    <label for="postdate">postdate</label>
                    <input type="text" class="postdate" name="postdate" id="postdate" placeholder="Place date here">
                </div>
                <button class="btn btn-danger" type="submit">
                    {{__('home.button')}}
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
